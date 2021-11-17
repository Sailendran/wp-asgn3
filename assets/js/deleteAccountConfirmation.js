deleteConfirm() {
    let cfm = alert('Are you sure you want to delete your account?');
    if (cfm) {
        window.location.replace("assets/delete-user.php");
    }
}