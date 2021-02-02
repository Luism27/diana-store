<x-admin-layout>
    <div class=" my-5 mx-5">
        <div>
            <button onclick="window.location= '{{route('profile.admin.crud.producto.crear')}}' " class="btn btn-success">
                Crear producto
            </button>
        </div>
        <table  class="border-collapse table-auto " >
            <thead>
                <tr class=" bg-red-200">
                    <th class="px-2 py-4 text-lg border-t border-b border-r border-gray-700">
                        #id
                    </th>
                    <th class="px-2 py-4 text-lg border border-gray-700">
                        Nombre
                    </th>
                    <th class="px-2 py-4 text-lg border border-gray-700">
                        Descripcion
                    </th>
                    <th class="px-2 py-4 text-lg border border-gray-700">
                        Precio
                    </th>
                    <th class="px-2 py-4 text-lg border border-gray-700">
                        Categoria
                    </th>
                    <th class="px-2 py-4 text-lg border border-gray-700">
                        Stock
                    </th>
                    <th class="px-2 py-4 text-lg border-t border-b border-l border-gray-700">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="">
                        <td class=" px-2 border-t border-b border-r border-gray-700">
                            {{$producto->id}}
                        </td>
                        <td class=" px-2 border border-gray-700 ">
                            {{$producto->name}}
                        </td>
                        <td class=" px-2 border border-gray-700">
                            {{$producto->descripcion}}
                        </td>
                        <td class=" px-2 border border-gray-700">
                            {{$producto->precio}}
                        </td>
                        <td class=" px-2 border border-gray-700">
                            {{$producto->subcategoria->name}}
                        </td>
                        <td class=" px-2 border border-gray-700">
                            {{$producto->stock}}
                        </td>
                        <td class="px-2 py-4 text-lg border-t border-b border-l border-gray-700">
                            <button onclick="window.location='{{route('profile.admin.crud.producto.editar',$producto)}}'" class="btn btn-warning w-20">
                                Editar
                            </button>
                            <button class="btn btn-danger w-20">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$productos->links()}}

</x-admin-layout>