<x-admin-layout class="Users">
    <x-admin-header 
        header_title="Users" 
        :total_count="count($users)"
    />

    <div class="body">
        <table class="table">
            <thead>
                <th class="center">ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th class="center">Action</th>
            </thead>

            <tbody>
                @if(count($users) > 0)
                    @php $id = 1 @endphp
                    @foreach($users as $user)
                    <tr class="searchable {{ $user->user_status == '0' ? 'inactive_user' : 'active' }}">
                        <td class="center">
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}">
                                {{ $id++ }}
                            </a>
                        </td>
                        <td>
                            {{ $user->first_name .' '. Auth::user()->last_name }} 
                            {!! $user->user_level == 0 ? '<span class="td_span">admin</span>' : '' !!}
                        </td>
                        <td class="{{ $user->email_verified_at != Null ? 'verified' : 'unverified'  }}">{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td class="actions">
                            <div class="action">
                                <form id="deleteForm_{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button" onclick="deleteItem({{ $user->id }}, 'user');">
                                        <i class="fas fa-trash-alt delete"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No users yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <x-slot name="javascript">
        <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    </x-slot>
</x-admin-layout>