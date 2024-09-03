<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Mail\InquiryAdminMail;
use App\Mail\InquiryUserMail;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PhpParser\Node\Expr\Array_;
use App\Rules\ReCaptcha;
use function Monolog\toArray;

class ContactUsController extends Controller
{
    public function contactus(Request $request)
    {
        $productName = $request->query('productName');

        return view('frontend.contactus', ['productName' => $productName]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required',
            'product_name' => 'required|max:255',
            'state' => 'required|max:255',
            'city' => 'required|max:255',
            'address' => 'required|string',
            'message' => 'required|string',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]);

        $contactUs = ContactUs::create($request->all());

        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile_number' => $request->input('mobile_number'),
            'product_name' => $request->input('product_name'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
            'message' => $request->input('message')
        ];
        Mail::to('rahematullah.greatideas@gmail.com')->send(new InquiryAdminMail($details));
        Mail::to($request->input('email'))->send(new InquiryUserMail($details));

        return redirect()->route('contactus')->with('success', 'Thank you! Your inquiry has been submitted successfully.');
        //}else{
        //    dd('Error');
        //}
        // Mail::to('dushyant.greatideas@gmail.com')->send(new InquiryAdminMail('Hello'));
        //  dd(Mail::to('dushyant@gmail.com'))->send(new InquiryAdminMail($details));

        // Mail::to($request->input('email'))->send(new InquiryUserMail($details));


    }

    public function index(Request $request)
    {
        $query = ContactUs::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('mobile_number', 'like', '%' . $search . '%')
                    ->orWhere('product_name', 'like', '%' . $search . '%')
                    ->orWhere('state', 'like', '%' . $search . '%')
                    ->orWhere('city', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
                    ->orWhere('message', 'like', '%' . $search . '%');
            });
        }

        $contactus = $query->paginate(10);
        return view('admin.contactus.index', compact('contactus'));
    }

    public function deleteMultiple(Request $request)
    {


        $ids = explode(',', $request->ids);
        ContactUs::whereIn('id', $ids)->delete();

        return redirect()->route('contactus.index')->with('error', 'Selected Contacts  Records deleted successfully.');
    }

    public function destroy($id)
    {
        $contactus = ContactUs::find($id);
        $contactus->delete();
        return redirect()->route('contactus.index')->with('error', 'ContactUs Records  Deleted Successfully');
    }
}
