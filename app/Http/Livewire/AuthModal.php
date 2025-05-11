namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AuthModal extends Component
{
    public $isOpen = false;
    public $currentForm = 'login';
    
    protected $listeners = ['openAuthModal'];

    public function openAuthModal()
    {
        $this->isOpen = true;
    }

    public function closeAuthModal()
    {
        $this->isOpen = false;
        $this->resetValidation();
    }

    public function switchForm($formType)
    {
        $this->currentForm = $formType;
        $this->resetValidation();
    }

    public function render()
    {
        return view('components.auth.auth-modal');
    }
}