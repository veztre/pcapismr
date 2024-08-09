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
            <a class="nav-link {{ Request::route()->getName() == 'moduleOne.index' ? 'active' : '' }}" href="/moduleOne" onclick="moduleOne(event)">
                    <small>Module 1: General Info</small>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'moduleTwo.index' ? 'active' : '' }}" href="/moduleTwo" onclick="moduleTwo(event)">
                    <small>Module 2: RA 6969 </small>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'moduleThree.index' ? 'active' : '' }}" href="/moduleThree" onclick="moduleThree(event)">
                    <small>Module 3: RA 9275</small>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'moduleFour.index' ? 'active' : '' }}" href="/moduleFour" onclick="moduleFour(event)">
                    <small>Module 4: RA 8749</small>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'moduleFive.index' ? 'active' : '' }}" href="/modulefive" onclick="moduleFive(event)">
                    <small>Module 5: RA 1586</small>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() == 'moduleSix.index' ? 'active' : '' }}" href="/moduleSix" onclick="moduleSix(event)">
                    <small>Module 6: Others</small>
                </a>
            </li>
        </form>
    </nav>
</div> <!-- container -->

<script>
    function moduleOne(event) {
        event.preventDefault();
        if (hasData()) {
            window.location.href = event.target.href;
        } else {
            alert("Please save and complete all the modules first before going back to the next module.");
        }
    }

    function moduleTwo(event) {
        event.preventDefault();
        if (hasData()) {
            window.location.href = event.target.href;
        } else {
            alert("Please save and complete the current module before proceeding to the previous/next module.");
        }
    }

    function moduleThree(event) {
        event.preventDefault();
        if (hasData()) {
            window.location.href = event.target.href;
        } else {
            alert("Please save and complete the current module before proceeding to the previous/next module.");
        }
    }

    function moduleFour(event) {
        event.preventDefault();
        if (hasData()) {
            window.location.href = event.target.href;
        } else {
            alert("Please save and complete the current module before proceeding to the previous/next module.");
        }
    }

    function moduleFive(event) {
        event.preventDefault();
        if (hasData()) {
            window.location.href = event.target.href;
        } else {
            alert("Please save and complete the current module before proceeding to the previous/next module.");
        }
    }

    function moduleSix(event) {
        event.preventDefault();
        if (hasData()) {
            showConfirmation(event.target.href);
        } else {
            alert("Please save and complete the current module before proceeding to the previous module.");
        }
    }

    function hasData() {
        // Perform your data check here
        // Return true if there is data,false otherwise
        return false; // Replace this with your actual data check logic
    }

    function showConfirmation(url) {
        var confirmation = confirm("Are you sure that you saved the current module? Please save first before proceeding.");
        if (confirmation) {
            window.location.href = url;
        }
    }
</script>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
