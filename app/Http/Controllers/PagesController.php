<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller {


	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(5)->get();
		$noticias = Post::orderBy('created_at', 'desc')->limit(10)->get();
		return view('pages.welcome')->withPosts($posts)->with('noticias',$noticias);
	}


	public function getAbout() {
		$first = 'Fuerza';
		$last = 'Integral';

		$fullname = $first . " " . $last;
		$email = 'cece.fuerza@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Su Mensaje a sido enviado!!');

		return redirect('/');
	}


}