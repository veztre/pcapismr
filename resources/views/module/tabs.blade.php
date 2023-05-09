<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<style>
    * {
    margin: 0;
    padding: 0;
    }

    ul {
    display: flex;
    list-style-type: none;
    }

    a:is(:link, :visited).active {
    color: white; /* font color */
    border: none;
    height: 100%;
    background-color: #2f87d4;
    border-radius: 5px;
    }

    li {
    list-style-type: none;
    color: #2f87d4;
    background-color: #dae2e8;
    margin-right: 5px;
    border-radius: 5px;
    }

    .nav-link {
        color: #2f87d4;
    }

    .nav-link .dropdown {
        color: #2f87d4;
    }

</style>


<div class="container mt-auto position-relative">
<nav class="navbar navbar-expand-lg ">


    <form class="d-flex">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('view', ['id' => auth()->user()->id]) }}">
                <small>Module 1: General Info</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="{{ route('view2', ['id' => auth()->user()->id]) }}" disabled>
                <small>Module 2: RA 6969</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="{{ route('view3', ['id' => auth()->user()->id]) }}" disabled>
                <small>Module 3: RA 9275</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="{{ route('view4', ['id' => auth()->user()->id]) }}" disabled>
                <small>Module 4: RA 8749</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="{{ route('view5', ['id' => auth()->user()->id]) }}" disabled>
                <small>Module 5: RA 1586</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link" href="{{ route('view6', ['id' => auth()->user()->id]) }}" disabled>
                <small>Module 6: Others</small>
            </a>
        </li>
    </form>
</nav>
    </div> <!-- collapse navbar-collapse -->

  </div> <!-- container -->
</nav>



{{--Enable tabs--}}
<script>
    // get the form and navigation links
    const form = document.querySelector('form');
    const navLinks = document.querySelectorAll('.nav-link');

    // add a submit event listener to the form
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // prevent form submission

        // validate the form data
        if (form.checkValidity()) {
            // get the name of the current tab
            const currentTab = event.target.closest('.tab-pane').id;

            // enable the next tab's navigation link
            const nextTab = navLinks.find(link => link.dataset.required === currentTab).parentNode.nextElementSibling;
            nextTab.querySelector('.nav-link').removeAttribute('disabled');
            nextTab.classList.remove('disabled');

            // submit the form
            event.target.submit();
        } else {
            form.reportValidity(); // show validation errors
        }
    });

    // add an event listener to the navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // prevent link from opening

            // get the index of the clicked link
            const clickedIndex = [...navLinks].indexOf(event.target.closest('.nav-link'));

            // check if the previous tabs have been saved
            let canNavigate = true;
            for (let i = 0; i < clickedIndex; i++) {
                if (navLinks[i].hasAttribute('disabled')) {
                    canNavigate = false;
                    break;
                }
            }

            if (canNavigate) {
                // navigate to the clicked tab
                window.location = event.target.closest('.nav-link').href;
            } else {
                // show an error message if previous tabs have not been saved
                alert('Please save the previous tabs before proceeding.');
            }

</script>
{{--Enable tabs end--}}


{{--Disable tabs--}}
<script>
    // get the form and navigation links
    const form = document.querySelector('form');
    const navLinks = document.querySelectorAll('.nav-link');

    // disable all tabs except the first one
    for (let i = 1; i < navLinks.length; i++) {
        navLinks[i].setAttribute('disabled', true);
        navLinks[i].parentNode.classList.add('disabled');
    }

    // add a submit event listener to the form
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // prevent form submission

        // validate the form data
        if (form.checkValidity()) {
            // get the name of the current tab
            const currentTab = event.target.closest('.tab-pane').id;

            // enable the next tab's navigation link
            const nextTab = navLinks.find(link => link.dataset.required === currentTab).parentNode.nextElementSibling;
            nextTab.querySelector('.nav-link').removeAttribute('disabled');
            nextTab.classList.remove('disabled');

            // submit the form
            event.target.submit();
        } else {
            form.reportValidity(); // show validation errors
        }
    });
</script>
{{--Disable tabs end--}}



<script>
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
    console.log(link);
  }
})
</script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
