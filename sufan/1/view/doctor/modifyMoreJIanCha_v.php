<div class="model-container positionR">
	<span class='entypo-cancel-circled positionA' title='关闭'></span>
	<div class='model-header'>
		<h2 class='marginT20'>更多检查</h2>
	</div>
	<div class='model-body positionA' id='model_body_scroll'>
		<div class='scroll-bar' id='model_body_scroll_bar'></div>
		<form class='positionR'id='model_body_scroll_main'>
			<table>
				<tr>
					<td>
						<span class='table-btn middle'>泌尿系B超检查</span>
					</td>
				</tr>
				<tr>
					<td>
						<label for="mnxbc_max_cj">最大长径：</label>
						<input class="middle" type="text"  name="mnxbc_max_cj"id="mnxbc_max_cj"/>
						<span>mm</span>
					</td>
					<td>
						<label for="mnxbc_max_kj">最大宽径：</label>
						<input class="middle" type="text"  name="mnxbc_max_kj"id="mnxbc_max_kj"/>
						<span>mm</span>
					</td>
				</tr>
				<tr>
					<td>
						<label for="mnxbc_max_hj">最大厚径：</label>
						<input class="middle" type="text"  name="mnxbc_max_hj"id="mnxbc_max_hj"/>
						<span>mm</span>
					</td>
					<td>
						<label for="mnxbc_max_tj">体&nbsp &nbsp &nbsp&nbsp积：</label>
						<input class="middle" type="text"  name="mnxbc_max_tj"id="mnxbc_max_tj">
						<span>mL</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for="mnxbc_cynl">残余尿量：</label>
						<input class="middle" type="text"  name="mnxbc_cynl"id="mnxbc_cynl"/>
						<span>mL</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for="mnxbc_IPP">前列腺突入膀胱程度(IPP)：</label>
						<input class="middle" type="text"  name="mnxbc_IPP"id="mnxbc_IPP"/>
						<span>mm</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class='table-btn middle'>尿动力学检查</span>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ndlx_max_nll">最大尿流率：</label>
						<input type="text" class="middle" name="ndlx_max_nll" id="ndlx_max_nll"/>
						<span>ml/s</span>
					</td>
					<td>
						<label for="ndlx_pnl">拍&nbsp尿&nbsp量&nbsp：</label>
						<input type="text" class="middle" name="ndlx_pnl" id="ndlx_pnl"/>
						<span>ml</span>
					</td>
				</tr>
				<tr>
					<td>
						<label for="ndlx_ave_nll">平均尿流率：</label>
						<input type="text" class="middle" name="ndlx_ave_nll" id="ndlx_ave_nll"/>
						<span>ml/s</span>
					</td>
					<td>
						<label for="ndlx_cynl">残余尿量：</label>
						<input type="text" class="middle" name="ndlx_cynl" id="ndlx_cynl"/>
						<span>ml</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for="ndlx_cynypgrl">初始尿意膀胱容量：</label>
						<input type="text" class="middle" name="ndlx_cynypgrl" id="ndlx_cynypgrl"/>
						<span>ml</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for="ndlx_max_pgrl">最&nbsp大&nbsp膀&nbsp胱&nbsp容&nbsp量&nbsp：</label>
						<input type="text" class="middle" name="ndlx_max_pgrl" id="ndlx_max_pgrl"/>
						<span>ml</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<span class='table-btn middle'>前列腺穿刺病理</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<textarea id="qlxccbl"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<span class='table-btn middle'>其他</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<textarea id="other_sqjc" name="other"></textarea>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class='model-footer'>
		<button class='btn marginTL20' id='save'>保存</button>
	</div>		
</div>