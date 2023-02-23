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

<div class="container mt-2">
<nav class="navbar navbar-expand-lg">


      <form class="d-flex">
        <li class="nav-item">
            <a class="nav-link" href="moduleOne">
                <small>Module 1: General Info</small>
            </a>
        </li>

        <li class="nav-item" >
            <a class="nav-link " href="moduleTwo" >
                <small>Module 2: RA 6969</small>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="moduleThree">
                <small>Module 3: RA 9275</small>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="moduleFour">
                <small>Module 4: RA 8749</small>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="moduleFive">
                <small>Module 5: RA 1586</small>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="moduleSix">
                <small>Module 6: Others</small>
            </a>
        </li>
      </form>


    </div> <!-- collapse navbar-collapse -->
  </div> <!-- container -->
</nav>



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
