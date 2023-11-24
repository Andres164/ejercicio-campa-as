export function create_table() {
    const form = document.getElementById("mainForm");
    if(!form.checkValidity()) {
      form.reportValidity();
      return 1;
    }

    const table_name = document.getElementById("table_name").value;
    sessionStorage.setItem("create_table_name", table_name);
    form.submit();
}

window.create_table = create_table;