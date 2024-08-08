<div>
    <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <div @class(['mt-2', 'relative rounded-md shadow-sm' => $errors->has($name)])>
        <input 
        id="{{ $id }}" 
        name="{{ $name }}"
         type="{{ $type }}"
          value="{{ $value }}"
          @class([
            'form-input block w-full rounded-md border-0 py-1.5 ring-1 ring-inset focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6',
            'pr-10 text-red-900 ring-red-300 placeholder:text-red-300 focus:ring-red-500' => $errors->has($name),
            'text-gray-900 shadow-sm ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600' => $errors->has($name),
          ])
           >
    </div>
    @error($name)
    {{ $message }}
    @enderror
    
    @if ($help)
    <p class="mt-2 text-sm text-gray-500 ">{{ $help }}</p>
    @endif
</div>