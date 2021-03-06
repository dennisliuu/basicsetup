<!DOCTYPE HTML>
<html>
	<head>

		<title>TradingView Charting Library demo</title>

		<!-- Fix for iOS Safari zooming bug -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">

		<script type="text/javascript" src="charting_library/charting_library.min.js"></script>
		<script type="text/javascript" src="datafeeds/udf/dist/polyfills.js"></script>
		<script type="text/javascript" src="datafeeds/udf/dist/bundle.js"></script>

		<script type="text/javascript">

			function getParameterByName(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
					results = regex.exec(location.search);
				return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}
			function getBars_custom (symbolInfo, resolution, from, to, onHistoryCallback, onErrorCallback, firstDataRequest) {
					function _send (data) {
						// // 按时间筛选
						// const dataInRange = data.length
						// ? data.filter(n => n.time >= from && n.time <= to)
						// : []

						// // 没有数据就返回 noData
						// const meta = {
						// noData: !dataInRange.length
						// }

						// // 有数据，则整理成图表库要求的格式
						// const bar = [...dataInRange]

						// // 触发回调
						// onHistoryCallback(bar, meta)
						alert("custom")
					}
			}

			function initOnReady() {
				var widget = window.tvWidget = new TradingView.widget({
					// debug: true, // uncomment this line to see Library errors and warnings in the console
					fullscreen: true,
					symbol: 'AAPL',
					interval: 'D',
					container_id: "tv_chart_container",
					//	BEWARE: no trailing slash is expected in feed URL
					datafeed: new Datafeeds.UDFCompatibleDatafeed("https://demo_feed.tradingview.com"),
					library_path: "charting_library/",
					locale: getParameterByName('lang') || "zh",
					disabled_features: ["use_localstorage_for_settings"],
					enabled_features: ["study_templates"],
					charts_storage_url: 'http://saveload.tradingview.com',
					charts_storage_api_version: "1.1",
					client_id: 'tradingview.com',
					user_id: 'public_user_id',
					getBars:getBars_custom,
					theme: getParameterByName('theme'),
				});
			};
			
			window.addEventListener('DOMContentLoaded', initOnReady, false);
		</script>

	</head>

	<body style="margin:0px;">
		<div id="tv_chart_container"></div>
	</body>

</html>
