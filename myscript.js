<style>#popup{display: none; height: 500px; width: 500px; position: absolute; top: 5pc; right:20pc;</style>

<div id="popup"></div>

<script>
function popupbox(elem)
{

    var popup = document.getElementById('elem');
    if( popup.style.display == 'none' )
    {
        popup.style.display = 'block';
    }

}
</script>