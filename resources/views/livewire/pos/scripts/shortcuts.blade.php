<script>
	var listener = new window.keypress.Listener();

	listener.simple_combo("f6", function() {
		console.log('f6')
		livewire.emit('saveSale')
	})

	listener.simple_combo("f8", function() {
		document.getElementById('cash').value =''
		document.getElementById('cash').focus()
		document.getElementById('hiddenTotal').value =''
	})

	listener.simple_combo("f7", function() {
		console.log('print last : f10')
		livewire.emit('print-last')
	})

	listener.simple_combo("f4", function() {
		var total = parseFloat(document.getElementById('hiddenTotal').value)
		if(total > 0) {
			Confirm(0, 'clearCart', '¿SEGUR@ DE ELIMINAR EL CARRITO?')
		} else
		{
			noty('AGREGA PRODUCTOS A LA VENTA')
		}
	})



</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
