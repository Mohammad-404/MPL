<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->


    <button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-primary dropdown-toggle']) }} 
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $slot }}
    </button>
    
</div>