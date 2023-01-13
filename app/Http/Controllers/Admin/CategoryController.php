<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $model = new Category;
        $data['all'] = $model->All();
        return view('admin/category/index_category',$data);
    }

    public function manageCategory(){
        return view('admin/category/add_category');
    }

    public function add(Request $request){

        $model = new Category;
        $model->category_name = $request->category;
        $model->category_slug = $request->slug;
        $model->save();
        return redirect('admin/category')->with('success',"Category successfully add");

    }

    public function delete($id)
    {
        $model=Category::find($id);
        $model->delete();
        return redirect('admin/category')->with('delete','Category successfully delete');
    }

    public function edit($id){
        $model = new Category;
        $data['single'] = $model::where('id',$id)->first();
        return view('admin/category/edit_category',$data);
    }

    public function update(Request $request){
       $model = new Category;
       $id = $request->post('editid');
       $rc = array(
            'category_name' => $request->category,
            'category_slug' => $request->slug
       );
       $model::where('id',$id)->update($rc);
       return redirect('admin/category')->with('success','Category successfully update');
    }

    public function active($id){
       $model = new Category;
       $rc = array(
            'status' => 0
       );
       $model::where('id',$id)->update($rc);
       return redirect('admin/category')->with('success',"Status successfully changed");
    }

    public function deactive($id){
        $model = new Category;
       $rc = array(
            'status' => 1
       );
       $model::where('id',$id)->update($rc);
       return redirect('admin/category')->with('success',"Status successfully changed");
    }
}
