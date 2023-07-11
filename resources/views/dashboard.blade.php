<x-app-layout>


    <div class="py-12 " >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">


                @if(Auth::user()->usertype=='admin')
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto ">
                        <h1 class=" mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                            Trainee Accounts
                        </h1>
                        <div class="m-auto flex justify-end p-2 ">
                            @if (Route::has('register'))

                                <a href="{{ route('create') }}" class="px-4 py-2 mb-6 text-white no-underline rounded-full transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">Create Account</a>

                            @endif
                        </div>

                        <div id="example_wrapper" class="mb-2 dataTables_wrapper no-footer mr-2">
                            <table id="example" class="stripe hover dataTable no-footer dtr-inline" style="width: 100%; padding-top: 1em; padding-bottom: 1em;" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr role="row">
                                    <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                    <th data-priority="2" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 224px;" aria-label="Facility: activate to sort column ascending">Company</th>
                                    <th data-priority="3" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Created: activate to sort column ascending">Email</th>
                                    <th data-priority="4" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">User Role</th>
                                    <th data-priority="5" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Status</th>
                                    <th data-priority="6" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 77px;" aria-label="Action: activate to sort column ascending">Action</th>
                                </tr>

                                </thead>

                                <tbody>

                                @foreach($users as $user)
                                    <tr role="row" class="{{ $user->id == auth()->user()->id && auth()->user()->usertype == 'admin' ? 'current-admin' : 'odd' }}">
                                        <td tabindex="0" class="sorting_1">{{$user->lastname}}, {{$user->firstname}}</td>
                                        <td>{{$user->company}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <form action="{{ route('updateUsertype') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                <select id="usertype" name="usertype" class="form-select" onchange="this.form.submit()">
                                                    <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="trainee" {{ $user->usertype == 'trainee' ? 'selected' : '' }}>Trainee</option>
                                                </select>
                                            </form>
                                        </td>


                                        <td>ACTIVE</td>
                                        <td>
                                            <div class="btn-group">
                                                <a  href="{{ route('editaccount', $user->id) }}"><button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg></button></a>

                                                <form
                                                    method="POST"
                                                    action="{{ route('users.destroy', $user->id) }}"
                                                    onsubmit="return confirm('Are you sure?');">
                                                    @csrf
                                                    @method('DELETE')<button type="delete" name= "delete" value="delete" class="btn btn-danger"><i class="bi bi-trash3"></i><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                            <path
                                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                        </svg></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>
                        <div class="m-auto flex justify-end p-2 mt-4">
                            <form id="delete-form" action="{{ route('delete-trainee-accounts') }}" method="POST">
                                @csrf
                                <a href="#" class="px-4 py-2 mb-6 text-white no-underline rounded-full transition ease-in-out delay-150 bg-red-300 hover:-translate-y-1 hover:scale-110 hover:bg-red-600 duration-300"
                                   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete trainee accounts?')) { document.getElementById('_confirmed').value = 'yes'; document.getElementById('delete-form').submit(); }">
                                    DELETE Trainee Accounts
                                </a>
                                <input type="hidden" name="_confirmed" id="_confirmed" value="no">
                            </form>
                        </div>



                    </div>


                @endif

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white m-auto ">

                    <h1 class=" mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                        SMR List
                    </h1>

                    <!--Title-->

                    <div class="m-auto flex justify-end p-2">
                        <a href="{{ route('module.moduleOne.generate.save') }}" id="createSmrLink" class="px-4 py-2 mb-6 text-white no-underline rounded-full transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300" onclick="disableCreateSmrLink()">
                            Create SMR
                        </a>
                    </div>




                    <div id="example_wrapper" class="mb-2 dataTables_wrapper no-footer mr-2">
                        <table id="example1" class="stripe hover dataTable no-footer dtr-inline" style="width: 100%; padding-top: 1em; padding-bottom: 1em;" role="grid" aria-describedby="example_info">
                            @if(Auth::user()->usertype=='admin')
                            <thead>
                            <tr role="row">
                                <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending" aria-label="Reference No.: activate to sort column descending">Reference No.</th>
                                <th data-priority="2" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 224px;" aria-label="Facility: activate to sort column ascending">Facility</th>
                                <th data-priority="3" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                <th data-priority="4" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Submitted: activate to sort column ascending">Date Submitted</th>
                                <th data-priority="5" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Status</th>

                            </tr>

                            </thead>

                            <tbody>



                                @foreach ($referencens as $ref)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $ref->ref_no }}</td>

                                        @if ($ref->plant)

                                            <td>{{ $ref->plant->facility->establishment }}</td>
                                        @else
                                            <td>No facility found</td>
                                        @endif


                                        <td>{{ $ref->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($oaupload->where('userid', $ref->userid)->count() > 0)
                                                {{ $oaupload->where('userid', $ref->userid)->first()->updated_at->format('Y-m-d h:i:s a') }}
                                            @else
                                                No upload found
                                            @endif
                                        </td>



                                        <td>ACTIVE</td>




                                    </tr>

                                @endforeach


                            @elseif(Auth::user()->usertype=='trainee')
                                <thead>
                                <tr role="row">
                                    <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending" aria-label="Reference No.: activate to sort column descending">Reference No.</th>
                                    <th data-priority="2" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 224px;" aria-label="Facility: activate to sort column ascending">Facility</th>
                                    <th data-priority="3" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Created: activate to sort column ascending">Date Created</th>
                                    <th data-priority="4" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Submitted: activate to sort column ascending">Date Submitted</th>
                                    <th data-priority="5" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Status</th>
                                    <th data-priority="6" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 77px;" aria-label="Action: activate to sort column ascending">Action</th>
                                </tr>

                                </thead>

                                <tbody>
                                @foreach ($referencens as $ref)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $ref->ref_no }}</td>

                                        @if ($ref->plant)
                                            @php
                                                $userId = Auth::user()->id;
                                                $referencens = Auth::user()->reference_no()->first();

                                                if ($referencens) {
                                                    $refNo = $referencens->reference_number;
                                                    $upload = $oaupload->where('userid', $userId)->first();
                                                    $fileName = $upload ? $upload->file : '';

                                                    // Build the user folder path
                                                    $userFolder = $userId . '/' . $refNo . '/moduleSixAttachment';

                                                    // Build the file path
                                                    $filePath = $userFolder . '/' . $fileName;

                                                    // Generate the download URL
                                                    $downloadUrl = asset($filePath);
                                                } else {
                                                    $downloadUrl = null;
                                                }
                                            @endphp
                                            <td>
                                                @if ($downloadUrl)
                                                    <a href="{{ $downloadUrl }}">{{ $ref->plant->facility->establishment }}</a>
                                                @else
                                                    No facility found
                                                @endif
                                            </td>
                                        @else
                                            <td>No facility found</td>
                                        @endif



                                        <td>{{ $ref->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            @if ($oaupload->where('userid', $ref->userid)->count() > 0)
                                                {{ $oaupload->where('userid', $ref->userid)->first()->updated_at->format('Y-m-d h:i:s a') }}
                                            @else
                                                No upload found
                                            @endif
                                        </td>



                                        <td>ACTIVE</td>


                                        <td>
                                            <a  href="{{ route('view', ['id' =>  Auth::user()->id]) }}"><button class="btn btn-info"><i class="bi bi-pencil-square"></i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                              d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></button></a>
                                        </td>


                                    </tr>

                                @endforeach

                            @endif


                            </tbody>

                        </table>

                    </div>
                </div>

                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white ">

                    <h1 class="mt-8 mr-4 font-sans font-bold break-normal text-indigo-500 px-2 py-2 text-xl md:text-2xl ">
                        USER ESTABLISHMENTS
                    </h1>

                    <div class="m-auto flex justify-end p-2 ">

                            <a href="{{ route('addfacility') }}" class="px-4 py-2 mb-6 text-white no-underline rounded-full transition ease-in-out delay-150 bg-indigo-400 hover:-translate-y-1 hover:scale-110 hover:bg-blue-500 duration-300">Add Facility</a>

                    </div>


                    <div id="example_wrapper" class="mb-2 dataTables_wrapper no-footer mr-2">

                        <table id="example2" class="stripe hover dataTable no-footer dtr-inline" style="width: 100%; padding-top: 1em; padding-bottom: 1em;" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th data-priority="1" class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 142px;" aria-sort="ascending" aria-label="Emb Id: activate to sort column descending">Emb id</th>
                                <th data-priority="2" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 224px;" aria-label="Establishment: activate to sort column ascending">Establishment</th>
                                <th data-priority="3" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Street: activate to sort column ascending">Street</th>
                                <th data-priority="4" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Baranggay: activate to sort column ascending">Baranggay</th>
                                <th data-priority="5" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Created: activate to sort column ascending">City/Municipality</th>
                                <th data-priority="6" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Submitted: activate to sort column ascending">Province</th>
                                <th data-priority="6" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;" aria-label="Date Submitted: activate to sort column ascending">Date Approved</th>
                                <th data-priority="7" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 92px;" aria-label="Status: activate to sort column ascending">Status</th>
                            </tr>

                            </thead>

                            <tbody>

                            @if(Auth::user()->usertype=='admin')
                                @foreach($addfacility as $facility)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{$facility->embregion}}- {{$facility->embid}}</td>
                                        <td>{{$facility->establishment}}</td>
                                        <td>{{$facility->street}}</td>
                                        <td>{{$facility->baranggay}}</td>
                                        <td>{{$facility->city}}</td>
                                        <td>{{$facility->province}}</td>
                                        <td>{{ $facility->created_at->format('Y-m-d') }}</td>
                                        <td>ACTIVE</td>
                                    </tr>
                                @endforeach
                            @elseif(Auth::user()->usertype=='trainee')
                                @foreach($addfacility as $facility)

                                        <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1">{{$facility->embregion}}- {{$facility->embid}}</td>
                                            <td>{{$facility->establishment}}</td>
                                            <td>{{$facility->street}}</td>
                                            <td>{{$facility->baranggay}}</td>
                                            <td>{{$facility->city}}</td>
                                            <td>{{$facility->province}}</td>
                                            <td>{{ $facility->created_at->format('Y-m-d') }}</td>
                                            <td>ACTIVE</td>
                                        </tr>

                                @endforeach
                            @endif

                            </tbody>

                        </table>

                    </div>


                </div>


            </div>
        </div>
    </div>
</x-app-layout>



<style>
    .current-admin {
        background-color: yellow; /* Customize the highlighting style */
    }


    .disabled {
        opacity: 0.5; /* Example styling: reduce opacity for disabled appearance */
        /* Add any additional disabled styling as needed */
    }
</style>

{{--confirmation on deleting all trainee accounts--}}
<script>
    function showConfirmationModal() {
        if (confirm('Are you sure you want to delete the trainee accounts?')) {
            document.getElementById('_confirmed').value = 1;
            document.getElementById('delete-form').submit();
        }
    }
</script>

{{--disable createsmrlink button--}}
<script>
    function disableCreateSmrLink() {
        var createSmrLink = document.getElementById('createSmrLink');
        createSmrLink.style.pointerEvents = 'none'; // Disable pointer events to prevent clicks
        createSmrLink.classList.add('disabled'); // Add a disabled class for visual styling

        // Store the disabled state in local storage
        localStorage.setItem('createSmrDisabled', 'true');
    }

    // Check if the link should be disabled on page load
    document.addEventListener('DOMContentLoaded', function() {
        var createSmrLink = document.getElementById('createSmrLink');
        var isCreateSmrDisabled = localStorage.getItem('createSmrDisabled');

        if (isCreateSmrDisabled === 'true') {
            createSmrLink.style.pointerEvents = 'none';
            createSmrLink.classList.add('disabled');
        }
    });
</script>
