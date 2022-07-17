<div>
    {{-- <div>
        <img src="/uploads{{$user->avatar }}" alt="" style="max-height: 300px;">
        <form enctype="multipart/form-data"  action="/profile" method="POST">
            <label>Select Image: </label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div>
                <button type="submit"  class="bg-gray-800 hover:bg-gray-900 text-white text-lg py-2 px-5 rounded my-3 hover:shadow focus:outline-none focus:shadow-outline">Save</button>
            </div>
        </form>
    </div> --}}

    
    @if(Session::has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 text-sm p-2 rounded mb-4 success alert-success" role="success">
        <span class="block sm:inline">{{ session()->get('message') }}</span>
        

    </div>
    @endif

    <form wire:submit.prevent="updateProfile" enctype="multipart/form-data" method="POST">
        <div>
            @if(Session::has('successAlert'))
            <script>
                showAlert('success', "{{ Session::get('successAlert') }}");
            </script>
            @endif
        </div>
        <div>
            @if($avatar)
            <img src="{{ $avatar->temporaryUrl() }}">
            @endif
            {{-- <img src="storage/{{$user->avatar}}" alt=""> --}}
            
            <input type="file" name="avatar" wire:model="avatar" class="form-input w-full @error('avatar')  border-red-500 @enderror" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <x-tailwind-invalid-feedback field="avatar" />

        </div>
        <div> 
            <label class="block mb-2">First Name</label>
            <input wire:model="user.firstname" type="text" class="form-input w-full @error('user.name')  border-red-500 @enderror">
            <x-tailwind-invalid-feedback field="user.name" />
        </div>
        <div>
            <label class="block mb-2">Last Name</label>
            <input wire:model="user.lastname" type="text" class="form-input w-full @error('user.name')  border-red-500 @enderror">
            <x-tailwind-invalid-feedback field="user.lastname" />
        </div>
        <div class="my-3">
            <label class="block mb-2">Email</label>
            <div class="bg-gray-200 py-2 px-3 rounded">{{ $user->email }}</div>
        </div>
        <div class="my-3">
            <label class="block mb-2">Mobile</label>
            <input wire:model="user.phone" type="text" class="form-input w-full @error('user.phone')  border-red-500 @enderror">
            <x-tailwind-invalid-feedback field="user.phone" />
        </div>
        <div class="my-3">
            <label class="block mb-2">Gender</label>
            <div class="flex gap-5">
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="user.gender" type="radio" class="form-radio" name="gender" value="male">
                        <span class="ml-2">Male</span>
                    </label>
                </div>
                <div>
                    <label class="inline-flex items-center">
                        <input wire:model="user.gender" type="radio" class="form-radio" name="gender" value="female">
                        <span class="ml-2">Female</span>
                    </label>
                </div>
            </div>
            <x-tailwind-invalid-feedback field="user.gender" />
        </div>
        <div>
            <button type="submit" class="bg-gray-800 hover:bg-gray-900 text-white text-lg py-2 px-5 rounded my-3 hover:shadow focus:outline-none focus:shadow-outline">Save</button>
        </div>
    </form>
    <div class="align-self-center ml-auto">
        <a href="{{ route('PrintPDF', $user->id) }}" class="btn btn-light my-0 border font-poppins text-capitalize" target="_blank">Print PDF</a>
    </div>
</div>