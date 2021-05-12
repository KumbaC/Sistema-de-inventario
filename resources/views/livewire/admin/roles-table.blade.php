<div>
    <div class="container max-w-6xl px-4 mx-auto sm:px-8">
        <div class="py-8">
            <div class="grid-cols-2 px-8 py-6 -mx-4 overflow-x-auto sm:-mx-16 sm:px-8 md:grid-cols-2">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">

                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                    ID
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                    NAME
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                    EDITAR
                                </th>
                                <th scope="col" class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-blue-800">
                                    ELIMINAR
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($role as $roles)
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                            <p class="font-bold text-gray-900 whitespace-no-wrap">
                                                {{$roles->id}}
                                            </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="font-bold text-gray-900 whitespace-no-wrap">
                                         {{$roles->name}}
                                    </p>
                                </td>

                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <a href="{{route('admin.roles.edit', $roles)}}"><button class="w-10 h-10 px-4 py-2 ml-2 text-base font-semibold text-center text-white whitespace-no-wrap transition duration-200 ease-in bg-blue-700 rounded-lg shadow-md hover:bg-blue-200 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2" >
                                        <svg width="20" height="20" fill="currentColor" class="w-4 h-4 -ml-1 text-white" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                            </path>
                                        </svg>
                                    </button></a>
                                </td>
                                <form action="{{route("admin.roles.destroy", $roles)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <button class="w-10 h-10 px-4 py-2 ml-2 text-base font-semibold text-center text-white whitespace-no-wrap transition duration-200 ease-in bg-red-700 rounded-lg shadow-md hover:bg-red-400 focus:ring-blue-500 focus:ring-offset-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 -ml-1 text-white" viewBox="0 0 1792 1792">
                                            <path d="M1490 1322q0 40-28 68l-136 136q-28 28-68 28t-68-28l-294-294-294 294q-28 28-68 28t-68-28l-136-136q-28-28-28-68t28-68l294-294-294-294q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294 294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68l-294 294 294 294q28 28 28 68z">
                                            </path>
                                        </svg>
                                    </button>

                                </td>
                            </form>

                            </tr>
                           @endforeach
                        </tbody>
                </table>
</div>
