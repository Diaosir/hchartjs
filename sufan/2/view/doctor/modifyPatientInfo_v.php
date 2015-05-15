<div class="model-container positionR">
	<span class='entypo-cancel-circled positionA' title='关闭'></span>
	<div class='model-header'>
		<h2 class='marginT20'>基本信息</h2>
	</div>
	<div class='model-body'>
		<form id='update_data_form'>
			<table>
			<tr>
				<td>
					<label for="patient_name">姓&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp名：</label>
					<input class="middle" type="text" name="patient_name" id="patient_name"/>
				</td>
				<td>
					<label for="patient_id">病例号(ID)：</label>
					<input  class="middle" type="text" name="ill_id" id="ill_id"/>
				</td>
			</tr>
			<tr>
				<td>
					<label> 性&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp别：</label>
					<label for="boy_sex">男</label>
					<div class="radio-box">
						<input type="radio" value=1 name="patient_sex" id="boy_sex"/>
						 <span></span>
					</div>
					<label for="girl_sex">女</label>
					<div class="radio-box">
						<input type="radio" value=1 name="patient_sex" id="girl_sex"/>
						<span></span>
					</div>
				</td>
				<td>
					<label for="patient_age">年&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp龄：</label>
					<input  class="middle" type="text" name="patient_age" id="patient_age"/>
					<label> 岁</label>
				</td>
			</tr>
			<tr>
				<td>
					<label for="patient_height">身&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp高：</label>
					<input class="middle" type="text" name="patient_height" id="patient_height"/>
					<label>cm</label>
				</td>
				<td>
					<label for="patient_weight">体&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp重：</label>
					<input class="middle" type="text" name="patient_weight" id="patient_weight"/>
					<label>kg</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>民&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp族：</label>
					<label for="minzu">汉</label>
					<div class="checkbox">
						<input type="checkbox" value=1 id="minzu" name="patient_nation">
						<span class="entypo-check"></span>
					</div>
				</td>
				<td>
					<label for="other_minzu">其&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp他：</label>
					<input class="middle" type="text" name="other-minzu" id="other_minzu"/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<label for="patient_address">通信地址：</label>
					<input class="bigger" type="text" name="patient_address" id="patient_address"/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<label for="patient_phone">联系方式：</label>
					<input  class="bigger" type="text" name="patient_phone" id="patient_phone"/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					   <label>教育程度：</label>
					   <label for="upbenke">本科以上</label>
						<div class="radio-box">
						   <input type="radio" value=1 name="eduction_level" id="upbenke"/>
                           <span></span>
                       </div>
					   <label for="benke">大学本科</label>
						<div class="radio-box">
						   <input type="radio" value=1 name="eduction_level" id="benke"/>
						   <span></span>
						</div>
						<label for="gaozhong">高&nbsp&nbsp&nbsp中</label>
						<div class="radio-box">
						   <input type="radio" value=1 name="eduction_level" id="gaozhong"/>
						   <span></span>
						</div>
						<label for="chuzhong">初中</label>
						<div class="radio-box">
						   <input type="radio" value=1 name="eduction_level" id="chuzhong"/>
						   <span></span>
						</div>
						<label for="xiaoxue">小学</label>
						<div class="radio-box">
						   <input type="radio" value=1 name="eduction_level" id="xiaoxue"/>
						   <span></span>
						</div>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<label>经济状况：</label>
					<label for="high">&nbsp高&nbsp收&nbsp入</label>
					<div class="radio-box">
						<input type="radio" value=1 name="income" id="high"/>
						<span></span>
					</div>
					<label for="middle">中等收入</label>
				    <div class="radio-box">
						<input type="radio" value=1 name="income" id="middle"/>
						<span></span>
				    </div>
					<label for="low">低收入</label>
					<div class="radio-box">
						<input type="radio" value=1 name="income" id="low"/>
					    <span></span>
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
	<div class='model-footer'>
		<button class='btn marginTL20' id='save'>保存</button>
	</div>		
</div>
				