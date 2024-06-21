<x-admin-layout class="Contact">
    <div class="custom_form show_user_message">
        <header>
            <p>Update Message</p>
            <p>
                <span>{{ $user_message->name }}</span>
                <span>{{ $user_message->email }}</span>
                <span>{{ $user_message->phone_number }}</span>
            </p>
        </header>

        <div class="form_details">
            <div class="comment">
                <p>{{ $user_message->message }}</p>
            </div>

            <a href="mailto:{{ $user_message->email }}" class="btn">Email this user</a>
        </div>

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