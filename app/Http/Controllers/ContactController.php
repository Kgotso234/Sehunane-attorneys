<? 
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Mail;
    use Illuminate\Http\Request;
    use App\Mail\ContactMessage;
    use App\Mail\ContactAutoReply;

    class ContactController extends Controller {
        public function send(Request $request)
        {
            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            try {

                Mail::to('info@sehunaneattorneys.co.za')
                    ->send(new ContactMessage($data));

                Mail::to($data['email'])
                    ->send(new ContactAutoReply($data['name'], $data['subject']));

                return response()->json([
                    'success' => true,
                    'message' => 'Message sent successfully'
                ]);

            } catch (\Exception $e) {

                return response()->json([
                    'success' => false,
                    'message' => 'Mail failed',
                    'error' => $e->getMessage()
                ], 500);
            }
        }
    }



