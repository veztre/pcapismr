<x-app-layout>


    <div class="py-12 ">
        <div class="container">
        @if(session('message'))
            <div class="alert alert-info text-center">
                {{ session('message') }}
            </div>
        @endif
        </div>
        <form method="POST" action="{{route('check')}}">
            @csrf
            <!-- {{ csrf_field() }} -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto ">


                    <h1 class=" mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                        <p class="p-2 bg-secondary text-light">QUESTIONS BEFORE WE PROCEED TO MODULE 2</p>
                    </h1>

                    <p>Is the establishment an importer, distributor, manufacturer/producer, or user of any industrial
                        chemicals under CCO?</p>


                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eidm" id="eidmRadio1" value="Yes" {{ old('eidm') == 'Yes' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="eidmRadio1">
                                <p class="mt-3 mx-1">Yes</p>
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="eidm" id="eidmRadio2" value="No" {{ old('eidm') == 'No' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="eidmRadio2">
                                <p class="mt-3 mx-1">No</p>
                            </label>
                        </div>



                        <div class="row mt-3">
                    <p>Is the establishment a hazardous waste Treater/Recycler?</p>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ehwt" id="eidmRadio1" value="Yes" {{ old('eidm') == 'Yes' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="eidmRadio1">
                                <p class="mt-3 mx-1">Yes</p>
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ehwt" id="eidmRadio2" value="No" {{ old('eidm') == 'No' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="eidmRadio2">
                                <p class="mt-3 mx-1">No</p>
                            </label>
                        </div>


                </div>
            </div>

            <div class="container">
                <div class="col mb-3">
                    <div class="mb-3" style="float: right">
                        <a href="{{ route('module.moduleOne') }}" class="btn btn-lg border bg-light">Previous</a>
                        <input type="submit" value="Proceed to Module 2" class="px-4 py-2 mb-6 text-white no-underline  transition ease-in-out delay-150 bg-blue-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">
                    </div>
                </div>
            </div>
        </div>
        </form>



    </div>
    </div>

</x-app-layout>
