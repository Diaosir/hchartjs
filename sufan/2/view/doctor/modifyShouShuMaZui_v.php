<div class="model-container positionR">
	<span class='entypo-cancel-circled positionA' title='关闭'></span>
	<div class='model-header'>
		<h2 class='marginT20'>围手术期手术指标</h2>
	</div>
	<div class='model-body positionA' id='model_body_scroll'>
		<div class='scroll-bar' id='model_body_scroll_bar'></div>
		<form class='positionR'id='model_body_scroll_main'>
			<table>
				<tr>
					<td colspan='2'>
						<span class='table-btn small'>麻醉</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class='small'>麻醉方式:</label>
					    <label for="mjfs1">全麻</label>
					    <div class="radio-box">
					        <input type="radio" value=1 name="mjfs" id="mjfs1" />
					        <span></span>
					    </div>
					    <label class="marginL20" for="mjfs2">硬膜外</label>
					    <div class="radio-box">
					        <input type="radio" value=1 name="mjfs" id="mjfs2"/>
					        <span></span>
					    </div>
					    <label class="marginL20" for="mjfs3">腰麻</label>
					    <div class="radio-box">
					        <input type="radio" value=1 name="mjfs" id="mjfs3"/>
					        <span></span>
					    </div>
					    <label class="marginL20" for="mjfs4">硬膜外+腰麻</label>
					    <div class="radio-box">
					        <input type="radio" value=1 name="mjfs" id="mjfs4"/>
				            <span></span>
				        </div>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class='small' for="mjpf">麻醉评分:</label>
						<input type="text" class="middle"  name="mjpf" id="mjpf"/>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<span class='table-btn small'>手术情况</span>
					</td>
				</tr>
				<tr>
					<td>
						<label class='small'for="sssj_dq">电切时间:</label>
						<input class="middle" type="text" name="sssj_dq" id="sssj_dq"/>
						<span>min</span>
					</td>
					<td>
						<label for="sssj_wc">剜切时间:</label>
						<input class="middle" type="text" name="sssj_wc" id="sssj_wc"/>
						<span>min</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label title='组织粉碎时间'for="sssj_zzfs">组织粉碎:</label>
					    <input class="middle" type="text" name="sssj_zf" id="sssj_zzfs"/>
					    <span>min</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class='small'>手术方式:</span>
						<label for="ssfs_turp">TURP</label>
						<div class="radio-box">
						   <input type="radio"  value=1 name="ssfs" id="ssfs_turp"/>
						   <span></span>
						</div>
						<label class="marginL20"for="ssfs_tuerp">TUERP</label>
						<div class="radio-box">
						   <input type="radio"  value=1 name="ssfs" id="ssfs_tuerp" />
						   <span></span>
						</div>
					</td>
				</tr>
				<tr>
					<td >
						<label class='small'for="qlxqczl">前列腺切除重量：</label>
						<input class="middle" type="text" name="qlxqczl" id="qlxqczl"/>
						<span>mg</span>
					</td>
					<td>
						<label for="bmck">包膜穿孔</label>
						<div class="checkbox">
						   <input type="checkbox" value=1 name="bmck" id="bmck"/>
						   <span class="entypo-check"></span>
						</div>
						<label class="marginL20"for="TURS">TURS</label>
						<div class="checkbox">
						   <input type="checkbox" value=1 name="TURS" id="TURS"/>
						   <span class="entypo-check"></span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label class='small'for="cxl">出血量:</label>
						<input class="middle" type="text" name="cxl" id="cxl"/>
						<span>ml</span>
					</td>
					<td>
						<label for="sx">是否输血</label>
						<div class="checkbox">
						   <input type="checkbox" value=1 name="sx" id="sx"/>
						   <span class="entypo-check"></span>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<span class='table-btn small'>术中情况</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class='small'for="szcxy">术中冲洗液用量:</label>
						<input class="large" type="text" name="szcxy" id="szcxy"/>
						<span>ml</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class="small" for="szyy_name">药物名称:</label>
						<input class="large" type="text" name="szyy_name" id="szyy_name"/>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label  class="small" for="szyy_jl">用药剂量:</label>
						<input class="large" type="text" name="szyy_jl" id="szyy_jl"/>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class='small'for="szyy_jysj">给药时间:</label>
						<input class="large" type="text" name="szyy_jysj" id="szyy_jysj"/>
					</td>
				</tr>
				<tr>
					<td>
						<label  class='small'for="cxpgcxsj">持续膀胱冲洗时间:</label>
						<input class="middle" type="text" name="cxpgcxsj" id="cxpgcxsj"/>
						<span>h</span>
					</td>
					<td>
						<label class="small"for="lzngsj">留置尿管时间:</label>
						<input class="middle" type="text" name="lzngsj" id="lzngsj"/>
						<span>h</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label class='small'for="shzysj">术后住院时间:</label>
						<input class="middle" type="text" name="shzysj" id="shzysj"/>
						<span>d</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<span class='table-btn small'>病理结果</span>
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<label for="bljg1">前列腺增生症</label>
						<div class="checkbox">
							<input type="checkbox"  value=1 name="bljg" id="bljg1"/>
							<span class="entypo-check"></span>
						</div>
						<label class="marginL20"for="bljg2">前列腺增生症PIN</label>
						<div class="checkbox">
						   <input type="checkbox"  value=1 name="bljg" id="bljg2"/>
						   <span class="entypo-check"></span>
						</div>
						<label class="marginL20" for="bljg3">前列腺癌</label>
						<div class="checkbox">
						   <input type="checkbox"  value=1 name="bljg" id="bljg3"/>
						   <span class="entypo-check"></span>
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
				