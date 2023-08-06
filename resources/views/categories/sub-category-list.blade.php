<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <?php $_SESSION['i']=$_SESSION['i']+1; ?>
    <tr>
        <td>{{$_SESSION['i']}}</td>
        <td>{{$dash}}{{$subcategory->name}}</td>
        <td>{{$subcategory->parent->name}}</td>

        {{-- <td>

            <a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}">Edit</a>


            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a >
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </a>
            </form>
        </td> --}}

    </tr>
    @if(count($subcategory->subcategory))
        @include('categories/sub-category-list',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach
