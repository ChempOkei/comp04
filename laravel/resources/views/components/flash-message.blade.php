@if (session($key = 'success'))
        <div class="flash">{{ session($key) }}</div>
@endif