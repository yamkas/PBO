#CONTACT MIGRATION#
public function up()
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone');
        $table->timestamps();
    });
}
<------------------------------------------------------------------<
#CONTACT MODEL#
class Contact extends Model
{
    protected $fillable = ['name', 'phone'];
}
<------------------------------------------------------------------<
#CONTACT CONTROLLER#
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'Contact added successfully');
    }
}
<------------------------------------------------------------------<
#ROUTES WEB PHP#
use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store']);
<------------------------------------------------------------------<
#INDEX BLADE#
<!-- index.blade.php -->
<form method="post" action="{{ url('/contacts') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" required>
    <button type="submit">Add Contact</button>
</form>

<ul>
    @foreach($contacts as $contact)
        <li>{{ $contact->name }} - {{ $contact->phone }}</li>
    @endforeach
</ul>



