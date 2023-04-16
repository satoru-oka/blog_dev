<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InterestCategory;

class InterestCategoryController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function AllInterestCategory()
    {
        $interestcategory = InterestCategory::latest()->get();
        return view('admin.interest_category.interest_category_all', compact('interestcategory'));
    } // End Method

    /**
     * Undocumented function
     *
     * @return void
     */
    public function AddInterestCategory()
    {
        return view('admin.interest_category.interest_category_add');
    } // End Method

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function StoreInterestCategory(Request $request)
    {
        InterestCategory::insert([
            'interest_category' => $request->interest_category,
        ]);

        $notification = array(
            'message' => 'Interest Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.interest.category')->with($notification);
    } // End Method

     /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function EditInterestCategory($id)
    {
        $interestcategory = InterestCategory::findOrFail($id);
        // dd($interestcategory);
        return view('admin.interest_category.interest_category_edit', compact('interestcategory'));
    } // End Method

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function UpdateInterestCategory(Request $request, $id)
    {
        InterestCategory::findOrFail($id)->update([
            'interest_category' => $request->interest_category,
        ]);

        $notification = array(
            'message' => 'Interest Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.interest.category')->with($notification);
    } // End Method

    public function DeleteInterestCategory($id)
    {
        InterestCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Interest Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method
}
