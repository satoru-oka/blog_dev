<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\InterestCategory;
use Illuminate\Support\Carbon;
class InterestController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function AllInterest()
    {
        $interest = Interest::latest()->get();
        // dd($interest);
        return view('admin.interest_page.interest_page_all', compact('interest'));
    } // End Method

    /**
     * Undocumented function
     *
     * @return void
     */
    public function AddInterest()
    {
        $interest = InterestCategory::orderBy('interest_category', 'ASC')->get();
        return view('admin.interest_page.interest_page_add', compact('interest'));
    } // End Method

    public function StoreInterest(Request $request)
    {
        Interest::insert([
            'interest_category_id' => $request->interest_category_id,
            'interest_title' => $request->interest_title,
            'interest_tag' => $request->interest_tag,
            'interest_summary' => $request->interest_summary,
            'text_url' => $request->text_url,
            'interest_image' => $request->interest_image,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Interest Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.interest')->with($notification);
    } // End Method

    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return void
     */
    public function EditInterest($id) 
    {
        $interest = Interest::findOrFail($id);
        $categories = InterestCategory::orderBy('interest_category', 'ASC')->get();
        return view('admin.interest_page.interest_page_edit',compact('interest', 'categories'));
    } // End Method
    
    // update
    public function UpdateInterest(Request $request)
    {
        $interest_id = $request->id;

        if ($request->text_url) {

            Interest::findOrFail($interest_id)->update([
                'interest_category_id' => $request->interest_category_id,
                'interest_title' => $request->interest_title,
                'interest_tag' => $request->interest_tag,
                'interest_summary' => $request->interest_summary,
                'text_url' => $request->text_url,
                'interest_image' => $request->interest_image,
            ]);

            $notification = array(
                'message' => 'Interest Updated with Interest Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.interest')->with($notification);
        } else {

            Interest::findOrFail($interest_id)->update([
                'interest_category_id' => $request->interest_category_id,
                'interest_title' => $request->interest_title,
                'interest_tag' => $request->interest_tag,
                'interest_summary' => $request->interest_summary,
            ]);

            $notification = array(
                'message' => 'Interest Updated without Reference URL Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.interest')->with($notification);
        } // end Else

    } // End Method
    // delete

    public function DeleteInterest($id)
    {
        Interest::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Interest Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // End Method 

    public function HomeInterest()
    {
        return view('frontend.interest');
    } // End Method

    public function InterestDetails()
    {
        return view('frontend.interest_details');
    } // End Method 

}
