<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Str;

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Reader\Exception;

use PhpOffice\PhpSpreadsheet\Writer\Xls;

use PhpOffice\PhpSpreadsheet\IOFactory;
class ProductController extends Controller
{
    //
	
	
	public function index(){
		$product=Product::all();
		return view('Admin.product.index',compact('product'));
	
}
	public function create(){
	$sub_category =SubCategory::all();
	$sub_category_data =SubCategory::all();

	$category=DB::table('categories')->get();
	$category_data=DB::table('categories')->get();
	$manufacturer=DB::table('manufacturers')->get();
	$manufacturer_data=DB::table('manufacturers')->get();

	// $sub_category=DB::table('categories')->get();

	return view('Admin.product.add',compact('category','sub_category','manufacturer','category_data','sub_category_data','manufacturer_data'));
	
}
	public function store(Request $request){
		// if($request->status == ''  && $request->product_featured == '' && $request->on_sale=='' && $request->deal==''){
		// 	$status = 0;
		// 	$featured = 0;
		// 	$sales = 0;
		// 	$deal=0;
		// }
		// else{
		// 	$status= 1;
		// 	$featured= 1;
		// 	$sales = 1;
		// 	$deal=1;
			
		// }
		$slug = Str::slug($request->product_title);
		$image=$request->file('product_image');
        if ($image) {
        $name_gen= hexdec(uniqid());
		 $image_ext=strtolower($image->getClientOriginalExtension());
		 $image_name=$name_gen.'.'.$image_ext;
		 $up_location='Backend/images/';
		 $last_img=$up_location.$image_name;
		 $image->move(public_path($up_location),$image_name);
		 if ($request->input('on_sale') == '1')
		 {
			 $on_sale ='1';
		 }
		 else{
			 $on_sale = '0';
		 }
			Product::insert([
				'name'=>$request->product_title,
				'name_ar'=>$request->product_title_ar,
				'slug'=>$slug,
				'featured'=>$request->product_featured,
				'description'=>$request->description,
				'description_ar'=>$request->description_ar,
				'short_description'=>$request->short_description,
				'short_description_ar'=>$request->short_description_ar,
				'manufacturer_id'=>$request->manufacturer,
				'category_id'=>$request->category,
				'sale_due_date'=>$request->sale_due_date,
				'price'=>$request->price,
				'sale_price'=>$request->sale_price,
				'SKU'=>$request->product_sku,
				'VAT'=>$request->product_vat,
				'Quantity'=>$request->quantity,
				// 'Opening_stock'=>$request->Opening_stock,
				'Alert_Stock'=>$request->Alert_Stock,
				'image'=>$image_name,
				'on_sale' => $on_sale,
				'Status'=>$request->status,
				'deal' => $request->deal,
				'promotion' => $request->promotion,
				'created_at'=>Carbon::now(),

				]);
		
			}
			else{
				Product::insert([
					'name'=>$request->product_title,
					'name_ar'=>$request->product_title_ar,
					'slug'=>$slug,
					'featured'=>$request->product_featured,
					'description'=>$request->description,
					'description_ar'=>$request->description_ar,
					'short_description'=>$request->short_description,
					'short_description_ar'=>$request->short_description_ar,
					'sale_due_date'=>$request->sale_due_date,

					'manufacturer_id'=>$request->manufacturer,
					'category_id'=>$request->category,
					'price'=>$request->price,
					'sale_price'=>$request->sale_price,
					'SKU'=>$request->product_sku,
					'VAT'=>$request->product_vat,
					'Quantity'=>$request->quantity,
					// 'Opening_stock'=>$request->Opening_stock,
					'Alert_Stock'=>$request->Alert_Stock,
					'on_sale' => $on_sale,
					'Status'=>$request->status,
					'deal' => $request->deal,
					'promotion' => $request->promotion,
					'created_at'=>Carbon::now(),
	
					]);
			
			}

		return redirect('admin/product');
	}
	public function edit($id)
	{
		$sub_category =SubCategory::all();
		$sub_category_data =SubCategory::all();
		$manufacturer_data=DB::table('manufacturers')->get();
		$manufacturer=DB::table('manufacturers')->get();

		$category_data=DB::table('categories')->get();
		$category=DB::table('categories')->get();
		$product=Product::findOrFail($id);
		// return $product;
		return view('Admin.product.edit',compact('product','sub_category','category','manufacturer','sub_category_data','category_data','manufacturer_data'));
	}

	// public function update(Request $request){
	// dd($request->all());
	// }
	public function update(Request $request){

		
		$slug = Str::slug($request->product_title);
		$res=Product::find($request->id);
		
		$image=$request->file('product_image');
		if($image){
			$name_gen= hexdec(uniqid());
			$image_ext=strtolower($image->getClientOriginalExtension());
			$image_name=$name_gen.'.'.$image_ext;
			$up_location='Backend/images/';
			$last_img=$up_location.$image_name;
			$image->move(public_path($up_location),$image_name);
			$res->image=$image_name;

		}
        if ($request->input('on_sale') == '1')
		{
			$on_sale ='1';
		}
		else{
			$on_sale = '0';
		}
		$res->name=$request->input('product_title');
		$res->name_ar=$request->input('product_title_ar');
		$res->slug=$slug;
		$res->manufacturer_id=$request->input('Manufacturer');
		$res->sale_due_date=$request->input('sale_due_date');
		$res->description=$request->input('description');
		$res->description_ar=$request->input('description_ar');
		$res->short_description=$request->input('short_description');
		$res->short_description_ar=$request->input('short_description_ar');
		$res->category_id=$request->input('category');
		$res->price=$request->input('price');
		$res->sale_price=$request->input('sale_price');
		$res->SKU=$request->input('product_sku');
		$res->VAT=$request->input('product_vat');
		$res->Quantity=$request->input('quantity');
		// $res->Opening_stock=$request->input('Opening_stock');
		$res->Alert_Stock=$request->input('Alert_Stock');
		$res->on_sale = $on_sale;
		$res->Status=$request->input('status');
		$res->deal = $request->input('deal');
		$res->promotion = $request->input('promotion');
		$res->featured=$request->input('product_featured');
		$res->save();
		return redirect('admin/product');
		}
	public function delete($id)
	{
		Product::findOrFail($id)->delete();
		return redirect()->back();

	}
	public function AjaxgeteCategory($category_id)
{
    $subcategory=SubCategory::where('category_id',$category_id)->orderBy('title','ASC')->get();
   return json_encode($subcategory);
}
	

function importData(Request $request){




	$this->validate($request, [

		'uploaded_file' => 'required|file|mimes:xls,xlsx'

	]);




	$the_file = $request->file('uploaded_file');

	try{

		$spreadsheet = IOFactory::load($the_file->getRealPath());

		$sheet        = $spreadsheet->getActiveSheet();

		$row_limit    = $sheet->getHighestDataRow();

		$column_limit = $sheet->getHighestDataColumn();

		$row_range    = range( 2, $row_limit );

		$column_range = range( 'F', $column_limit );

		$startcount = 2;

		// ab




		$data = array();




		foreach ( $row_range as $row ) {

			$data[] = [
				

				'barcode' =>$sheet->getCell( 'A' . $row )->getValue(),

				'name' => $sheet->getCell( 'B' . $row )->getValue(),

				'slug' => $sheet->getCell( 'C' . $row )->getValue(),
				'image' => $sheet->getCell( 'D' . $row )->getValue(),
				'featured' => $sheet->getCell( 'E' . $row )->getValue(),
				'manufacturer_id' => $sheet->getCell( 'F' . $row )->getValue(),
				'brand_id' => $sheet->getCell( 'G' . $row )->getValue(),
				'category_id' => $sheet->getCell( 'H' . $row )->getValue(),
				'category_slug' => $sheet->getCell( 'I' . $row )->getValue(),
				'Sub_category' => $sheet->getCell( 'J' . $row )->getValue(),
				
				'short_description' => $sheet->getCell( 'K' . $row )->getValue(),
				'description' => $sheet->getCell( 'L' . $row )->getValue(),
				'name_ar' => $sheet->getCell( 'M' . $row )->getValue(),
				'description_ar' => $sheet->getCell( 'N' . $row )->getValue(),
				'status' => $sheet->getCell( 'P' . $row )->getValue(),
				'deal' => $sheet->getCell( 'Q' . $row )->getValue(),
				'price' => $sheet->getCell( 'R' . $row )->getValue(),
				'on_sale' => $sheet->getCell( 'S' . $row )->getValue(),
				'promotion' => $sheet->getCell( 'T' . $row )->getValue(),
				'sale_price' => $sheet->getCell( 'U' . $row )->getValue(),
				'sale_due_date' => $sheet->getCell( 'V' . $row )->getValue(),
				'SKU' => $sheet->getCell( 'W' . $row )->getValue(),
				'VAT' => $sheet->getCell( 'X' . $row )->getValue(),
				'Quantity' => $sheet->getCell( 'Y' . $row )->getValue(),
				// 'Opening_stock' => $sheet->getCell( 'Z' . $row )->getValue(),
				'Alert_Stock' => $sheet->getCell( 'AA' . $row )->getValue(),

			  




			];

			$startcount++;

		}




		DB::table('product')->insert($data);

	} catch (Exception $e) {

		$error_code = $e->errorInfo[1];




		return back()->withErrors('There was a problem uploading the data!');

	}

	return back()->withSuccess('Great! Data has been successfully uploaded.');




}




/**

 * @param $customer_data

 */

public function ExportExcel($product_data){

	ini_set('max_execution_time', 0);

	ini_set('memory_limit', '4000M');




	try {

		$spreadSheet = new Spreadsheet();

		$spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);

		$spreadSheet->getActiveSheet()->fromArray($product_data);




		$Excel_writer = new Xls($spreadSheet);

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="product_ExportedData.xls"');

		header('Cache-Control: max-age=0');

		ob_end_clean();

		$Excel_writer->save('php://output');

		exit();

	} catch (Exception $e) {

		return;

	}




}




/**

 *This function loads the customer data from the database then converts it

 * into an Array that will be exported to Excel

 */

function exportData(){

	$data = DB::table('product')->orderBy('id', 'DESC')->get();




	$data_array [] = array(`barcode`, `name`, `slug`, `image`, `featured`, `manufacturer_id`, `brand_id`, `category_id`, `category_slug`, `Sub_category`, `short_description`, `description`, `name_ar`, `short_description_ar`, `description_ar`, `status`, `deal`, `price`, `on_sale`, `promotion`, `sale_price`, `sale_due_date`, `SKU`, `VAT`, `Quantity`, `Alert_Stock`);

	foreach($data as $data_item)

	{

		$data_array[] = array(


			'barcode' =>$data_item->barcode,

			'name' => $data_item->name,

			'slug' => $data_item->slug,
			'image' => $data_item->image,
			'featured' => $data_item->featured,
			'manufacturer_id' => $data_item->manufacturer_id,
			'brand_id' => $data_item->brand_id,
			'category_id' => $data_item->category_id,
			'category_slug' => $data_item->category_slug,
			'Sub_category' => $data_item->Sub_category,
			'short_description' => $data_item->short_description,
			'description' => $data_item->description,
			'name_ar' => $data_item->name_ar,
			'short_description_ar' => $data_item->short_description_ar,
			'description_ar' => $data_item->description_ar,
			'status' => $data_item->status,
			'deal' => $data_item->deal,
			'price' => $data_item->price,
			'on_sale' => $data_item->on_sale,
			'promotion' => $data_item->promotion,
			'sale_price' => $data_item->sale_price,
			'sale_due_date' => $data_item->sale_due_date,
			'SKU' => $data_item->SKU,
			'VAT' => $data_item->VAT,
			'Quantity' => $data_item->Quantity,
			// 'Opening_stock' => $data_item->Opening_stock,
			'Alert_Stock' => $data_item->Alert_Stock,

		  

		);




	}

	$this->ExportExcel($data_array);




}
}
