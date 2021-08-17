<?php  ob_start(); // Output Buffering Start 

   
    // Check If Get Request ID Is Numeric & Get The Integer Value Of It
    $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 1;

    // Select All Data Depend On This ID
    $stmt = $con->prepare("SELECT * FROM `sign` WHERE GroupID = ?");

    // Execute Query
    $stmt->execute(array($userid));

    // Fetsh The Data
    $row = $stmt->fetch();


?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <span class="navbar-brand"><?php
    echo $row['FullName'] ?></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="dashboard.php"><?php echo lang('DASHBOARD') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="firstyear.php?do=Manage"><?php echo lang('FIRSTYEAR') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="secondyear.php?do=Manage"><?php echo lang('SECONDYEAR') ?></a></li>
        <li class="nav-item"><a class="nav-link" href="thirdyear.php?do=Manage"><?php echo lang('THIRDYEAR') ?></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo lang('USER') ?></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li class="open"><a class="dropdown-item" href="thirdyear.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>"><?php echo lang('EDIT') ?></a></li>
            <li class="open"><a class="dropdown-item" href="logout.php"><?php echo lang('OUT') ?></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php  ob_end_flush(); // Output Buffering End ?>