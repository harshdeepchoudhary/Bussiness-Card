


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script>
			const button = document.getElementById('download-button');

			function generatePDF() {
				// Choose the element that your content will be rendered to.
				const element = document.getElementById('invoice');
				// Choose the element and save the PDF for your user.
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
		</script>
</body>
</html>
