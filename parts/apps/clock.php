<svg xmlns="http://www.w3.org/2000/svg"
	xmlns:xlink="http://www.w3.org/1999/xlink"
	width="270px" height="270px" viewBox="0 0 270 270" 
	onload="setClock()">
	<script>
		<![CDATA[
			var xmlns="http://www.w3.org/2000/svg"
			function setClock()
			{
				var date = new Date()
				var h = parseInt(date.getHours())
				h = h > 12 ? h-12: h
				var m = parseInt(date.getMinutes())
				var s = parseInt(date.getSeconds())
				var second = 6*s
				var minute =(m+s/60)*6
				var hour = (h+m/60+s/3600)*30
				var hourHand = document.getElementById("hour")
				var minuteHand = document.getElementById("minute")
				var secondHand = document.getElementById("second")
				hourHand.setAttribute("transform","rotate("+ hour.toString() +")")
				minuteHand.setAttribute("transform","rotate("+ minute.toString() +")")
				secondHand.setAttribute("transform","rotate("+ second.toString() +")") 
			}
		]]>
	</script>
	<g transform="translate(150,150)">
		<!-- tick -->
		<g>
			<circle r="108" fill="none" stroke-width="4" stroke="#999999" />
			<circle r="97" fill="none" stroke-width="11" stroke="#999999" stroke-dasharray="4,46.789082" transform="rotate(-1.5)" />
			<circle r="100" fill="none" stroke-width="5" stroke="#999999" stroke-dasharray="2,8.471976" transform="rotate(-.873)" />
		</g>
		<!-- hands -->
		<g id="hands" transform="rotate(180)">
			<g id="hour">
				<line stroke-width="5" y2="75" stroke-linecap="round" stroke="#999999" opacity=".5" />
				<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="12h" by="360" />
				<circle r="7" />
			</g>
			<g id="minute">
				<line stroke-width="4" y2="93" stroke-linecap="round" stroke="#999999" opacity=".9" />
				<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="60min" by="360" />
				<circle r="6" fill="#fcac45"/>
			</g>
			<g id="second">
				<line stroke-width="2" y1="-20" y2="102" stroke-linecap="round" stroke="#fcac45" />
				<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="60s" by="360" />
				<circle r="4" fill="#999999"/>
			</g>
		</g>
	</g>
</svg>