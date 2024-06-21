<x-admin-layout class="Contact">
    <div class="custom_form edit_comment">
        <header>
            <p>Update Message</p>
            <p>
                <span>{{ $user_message->name }}</span>
                <span>{{ $user_message->email }}</span>
                <span>{{ $user_message->phone_number }}</span>
            </p>
        </header>

        <form action="{{ route('user-messages.update', ['user_message' => $user_message->id]) }}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="ordering" id="ordering" value="{{ $user_message->ordering }}">

            <div class="comment">
                <p>{{ $user_message->message }}</p>
            </div>
            
            <div class="row_input_group">
                <div class="input_group">
                    <label for="is_visible">Is Visible</label>
                    <div class="custom_radio_buttons">
                        <label>
                            <input class="option_radio" type="radio" name="is_visible" id="visible" value="1" {{ $user_message->is_visible ==1 ? 'checked' : '' }}>
                            <span>Yes</span>
                        </label>
    
                        <label>
                            <input class="option_radio" type="radio" name="is_visible" id="not_visible" value="0" {{ $user_message->is_visible == 0 ? 'checked' : '' }}>
                            <span>No</span>
                        </label>
                    </div>
                    <span class="inline_alert">{{ $errors->first('is_visible') }}</span>
                </div>
            </div>

            <button type="submit">Update</button>
        </form>

        <form id="deleteForm_{{ $user_message->id }}" action="{{ route('user-messages.destroy', ['user_message' => $user_message->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <p>Delete this User's Message</p>
            <button type="button" class="delete_btn" onclick="deleteItem({{ $user_message->id }}, 'user message');">
                <i class="fas fa-trash-alt delete"></i>
                <span>Delete</span>
            </button>
        </form>
    </div>


    <x-slot name="javascript">
        <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    </x-slot>
</x-admin-layout>