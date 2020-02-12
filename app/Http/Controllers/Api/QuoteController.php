<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuoteResource;
use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->paginate(10);  //jika data banyak ita dapat menggunakan paginasion
        return QuoteResource::collection($quotes);
    }

    //panggil data berdasarkan id
    public function show(Quote $quote)  //sekarng gunakan root model bainding($id)
    {
        //$quote = Quote::find($id);
        return new QuoteResource($quote);
    }

    public function update(Quote $quote)
    {
        $quote->update([
            'message' => $quote->message
        ]);

        return new QuoteResource($quote);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);

        $quote = Quote::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return new QuoteResource($quote);  //menampilkan quote nya
    }
}
