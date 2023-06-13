@if(session()->has('success'))
    <div x-data = "{show:true}"
         x-init="setTimeout(()=> show=false,4000)"
         x-show="show"
         class="bg-blue-300 bottom-14 fixed px-4 py-3 right-3 rounded-xl text-white">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
