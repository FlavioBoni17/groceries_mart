<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Kategori Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Kategori Berhasil Dihapus');
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'category' => 'required|string|max:255',
    ]);

    // Temukan data berdasarkan ID
    $data = Category::findOrFail($id);

    // Perbarui nama kategori
    $data->category_name = $request->input('category');

    // Simpan perubahan
    $data->save();

    // Redirect ke halaman view_category dengan pesan sukses
    return redirect('/view_category')->with('success', 'Kategori berhasil diperbarui.');
}

    public function add_product()
    {
        $category = Category::all();

        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
        $image = $request->image;
        if ($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Produk Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function view_product()
    {
        $product = Product::all();
        return view('admin.view_product', compact('product'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Produk Berhasil Dihapus');
        return redirect()->back();
    }

}
