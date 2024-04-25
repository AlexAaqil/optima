<x-admin-layout class="Users">
    <div class="header">
        <h1>Users <span>({{ count($users) }})</span></h1>
    </div>

    <div class="body">
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Action</th>
            </thead>

            <tbody>
                @if(count($users) > 0)
                    @php $id = 1 @endphp
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <a href="#">
                                {{ $id++ }}
                            </a>
                        </td>
                        <td>{{ $user->first_name .' '. Auth::user()->last_name }}</td>
                        <td>{{ $user->email }}</td>
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
</x-admin-layout>