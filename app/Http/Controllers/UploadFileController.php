<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountInformation;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller {
    //
    public function index() {
        $accounts = AccountInformation::all();
        return view('Create a form.index')->with(['accountsInfo' => $accounts]);
    }
    public function store(Request $request) {
        $this->validate($request, ['account_photo' => 'mimes:jpeg,png,jpg',]);
          
          if ($request->hasFile('account_photo')) {
            $extension = $request->account_photo->getClientOriginalExtension();
            $fileName = $request->account_photo->getClientOriginalName();
            $request->file('account_photo')->storeAs('/uploads', $fileName);
            $url = Storage::url($fileName);

            $account = AccountInformation::create([
                'worker name' => $request->name,
                'worker surname' => $request->surname,
                'worker photo' => $url
            ]);

        return back();
    }
    else {
        abort(501, 'Sorry, but no');
    }
}
}
