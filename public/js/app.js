document.getElementById('filter_company_id').addEventListener('change',
function() {
    let companyId = this.value || this.options[this.selectedIndex].value;
    // Generate a query string
    //https://sss-lab:8000/contacts?company_id=?
    window.location.href = window.location.href.split("?")[0] + '?company_id=' + companyId
    // Use split to eliminate this scenario of multiple concatinations:
    //http://sss-lab:8000/concats?company_id=??company_id=??company_id=??company_id=??company_id=??
    //window.location.href = window.location.href + '?company_id=' + companyId
})