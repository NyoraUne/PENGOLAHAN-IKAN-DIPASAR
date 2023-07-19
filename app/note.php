/* ---------------------------------- table --------------------------------- */
<table id="tb1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
    </tbody>
</table>

/* ---------------------------------- basic --------------------------------- */

<?= $this->include('nav/head'); ?>
<?= $this->include('nav/foot'); ?>

/* --------------------------- Script Confirmation -------------------------- */
onclick="return confirmAction(event)"
<script>
    function confirmAction(event) {
        var confirmation = confirm("Apakah Anda yakin untuk menghapus data?");

        if (!confirmation) {
            event.preventDefault();
        }

        return confirmation;
    }
</script>

Nama :
<div class="input-group mb-2">
    <span class="input-group-text">@</span>
    <input name="" type="text" class="form-control">
</div>