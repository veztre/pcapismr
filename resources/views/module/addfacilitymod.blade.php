<x-app-layout>

    <title>Add Facility</title>

    <div class="py-12 ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('addf') }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->


                    <div class="container col ml-2" style="align-content: center">

                        <h1 class=" mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                            <p class="p-2 bg-secondary text-light">FACILITY</p>
                        </h1>


                        <table class="table table-borderless table-hover">
                            <thead>
                            <tr>
                                <td style="vertical-align: middle; text-align: right;">
                                    <label class="inline-block" style="display: block; text-align: left; margin-bottom: 0;">EMB ID:</label>
                                </td>
                                <td>
                                    <div class="input-group mt-4 mb-3" style="display: flex; align-items: center; justify-content: center;">
                                        <select id="region" name="embregion" class="form-control valid w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" aria-required="true" aria-invalid="false" style="width:400px;">
                                            <option selected disabled value=" ">SELECT EMB (Region)</option>
                                            @foreach ($regionn as $data)
                                                <option value="EMB {{$data->regionname}}" @if(old('embregion') == $data->regionname) selected @endif>
                                                    EMB {{$data->regionname}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="form-control mr-4" placeholder="EMB ID No." style="width:150px; margin-left: 10px" name="embid">
                                    </div>
                                </td>
                            </tr>

                            </thead>
                            <tbody>
                            <tr>
                                <td style="text-align: left;">
                                    <label for="establishment" style="display: block;">Establishment:</label>
                                </td>
                                <td class="" style="text-align:center">
                                    <input type="text" name="establishment" class="form-control" style="width:300px" placeholder="Name of Establishment">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <label for="street" style="display: block;">Street:</label>
                                </td>
                                <td class="" style="text-align:center">
                                    <input type="text" name="street" class="form-control" style="width:300px" placeholder="Name of Street">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <label for="baranggay" style="display: block;">Baranggay:</label>
                                </td>
                                <td class="" style="text-align:center">
                                    <input type="text" name="baranggay" class="form-control" style="width:300px" placeholder="Name of Brgy.">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <label for="city" style="display: block;">City/Municipality:</label>
                                </td>
                                <td class="" style="text-align:center">
                                    <input type="text" name="city" class="form-control" style="width:300px" placeholder="Name of City/Municipality">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <label for="province" style="display: block;">Province:</label>
                                </td>
                                <td class="" style="text-align:center">
                                    <input type="text" name="province" class="form-control" style="width:300px" placeholder="Name of Province">
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <input type="submit" value="Save Page" class="px-4 py-2 mb-6 text-white no-underline  transition ease-in-out delay-150 bg-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">
                    </div>


                </form>
            </div>

        </div>
    </div>
    </form>
</x-app-layout>
