<?php 
  include "templates/header.php"; 
?>

<!-- <style>
<?php include ''; ?>
</style> -->

<div class="Index">

  <div class="Header">
    <h1>Playlist Planet</h1>
  </div>

  <div class="Menu">
        <a href="createstationmember.php"><strong>New User</strong></a> - Add a new station member
        <br />
        <a href="readstationmembers.php"><strong>Search Station Members</strong></a> - Search for station members
        <br/>
        <a href="updatestationmembers.php"><strong>Edit Users</strong></a> - Edit station member information
        <br/>
        <a href="deletestationmembers.php"><strong>Remove Station Members</strong></a> - Remove station member information
        <br/>
        <a href="findalbumartist.php"><strong>Find Album Artist</strong></a> - Find album artist information
        <br />
        <a href="projectstationmembers.php"><strong>Find Station Member Information</strong></a> - Find specific types of information about station members
        <br />
        <a href="aggregation.php"><strong>Members in Collective</strong></a> - Get current number of station members
        <br />
        <a href="nestedagg.php"><strong>Nested Aggregation Query</strong></a> - Get episodes that are in more than a certain number of shows 
        <br />
        <a href="division.php"><strong>Division Query</strong></a> - See if an episode is in ALL shows
        <br />

  </div>

  <div class="Credits">
    Made by Justin Chan, Patrick Lee, Carol Zhang | 
    <a href="https://github.com/RedundantComputation/playlist-planet"> <b>Github Repo</b></a>
  </div>

<div>

<?php include "templates/footer.php"; ?>