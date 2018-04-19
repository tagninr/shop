@foreach($childs as $child)
    <tr row-id="{{ $child->id }}" parent-id="{{ $child->parent->id }}">
        <td>{{ $child->name }}</td>
        <td><a href="" target="_blank">{{ $child->slug }}</a></td>
        <td>{{ $child->parent->name ?? 'Root' }}</td>
        <td>
            <a href="{{ route('backend.category.edit', $child->id) }}">
                <button class="btn btn-sm btn-warning">
                    <i class="fa fa-pencil"></i>
                </button>
            </a>

            <a href="{{ route('backend.category.destroy', $child->id) }}"
               onclick="return confirmDelete()">
                <button class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </a>
        </td>
    </tr>
    @if(count($child->childs))
        @include('backend.category.childs', [
            'childs' => $child->childs
        ])
    @endif
@endforeach