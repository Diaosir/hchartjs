<div class='info-m-m-right positionR' data-patient_id='1'>
      <div class='patient-info'>
        <img class='small-icon' src="<?php e(URL.IMG)?>1.jpg"/>
        <div class='main-info'>
          <p class='info-name' id='patient_name'>黄振</p>
          <p class='info-sex' id='patient_sex'>男</p>
        </div>
        
      </div>
      <div class='marginT10' id='chance_info' data-info-style='基本信息'>
        <div class='ptitle'>
            <span class='after-click'data-info-style='基本信息'>基本信息</span>
            <span class='before-click'data-info-style='联系人'>联系人</span>        
        </div>
        <div class='all-info'>
          <div class='info-tip positionR'>
              <div class='positionA info-table-area visible' id='info_style_one_scroll'data-info-style='基本信息'>
                <div class='scroll-bar' id='info_style_one_scroll_bar'> </div>
                <table data-patient-id=''class='positionR' style='height:100%'id='info_style_one_scroll_main'>
                  <tbody>
                    <tr id='ill_id'>
                      <td>
                        病历号:
                      </td>
                      <td>
                        123 
                      </td>
                    </tr>

                    <tr id='patient_age'>
                      <td>
                        年龄:
                      </td>
                      <td>
                        22岁
                      </td>
                    </tr>
                    <tr id='patient_nation'>
                      <td>
                        民族:
                      </td>
                      <td>
                        壮
                      </td>
                    </tr>
                    <tr id='patient_height'>
                      <td>
                           身高:
                      </td>
                      <td>
                        168cm
                      </td>
                    </tr>
                    <tr id='patient_weight'>
                      <td>
                        体重:
                      </td>
                      <td>
                        56kg
                      </td>
                    </tr>

                    <tr id='patient_address'>
                      <td>
                        通信地址:
                      </td>
                      <td>
                        广州大学城华南理工大学
                      </td>
                    </tr>
                    <tr id='patient_phone'>
                      <td>
                        联系方式:
                      </td>
                      <td>
                        13580427249
                      </td>
                    </tr>
                    <tr id='education_level'>
                      <td>
                          教育程度:
                      </td>
                      <td>
                        大学本科
                      </td>
                    </tr>
                    <tr id='income'>
                      <td>
                          经济收入:
                      </td>
                      <td>
                        高收入
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class='positionA info-table-area invisible' id='info_style_two_scroll' data-info-style='联系人'>
                <div class='scroll-bar' id='info_style_two_scroll_bar'></div>
                <table data-patient-id=''class='positionR' id='info_style_two_scroll_main'>
                  <tbody>
                    <tr id='family_info'>
                      <td>
                        <span class='table-btn middle'>联系人资料</span>
                      </td>
                    </tr>
                    <tr id='family_name'>
                      <td>
                        联系人姓名:
                      </td>
                      <td>
                        黄奇伟
                      </td>
                    </tr>

                    <tr id='relative'>
                      <td>
                        与患者关系:
                      </td>
                      <td>
                        其他
                      </td>
                    </tr>
                    <tr id='family_address'>
                      <td>
                        通讯地址:
                      </td>
                      <td>
                        广州华南理工大学
                      </td>
                    </tr>
                    <tr id='post_code'>
                      <td>
                           邮编:
                      </td>
                      <td>
                        510006
                      </td>
                    </tr>
                    <tr id='family_phone'>
                      <td>
                           联系人电话:
                      </td>
                      <td>
                        23543534
                      </td>
                    </tr>

                    <tr id='hospital_info'>
                      <td>
                        <span class='table-btn middle'>住院资料</span>
                      </td>
                    </tr>

                    <tr id='in_time'>
                      <td>
                        入院时间:
                      </td>
                      <td>
                        2011年10月1日
                      </td>
                    </tr>
                    <tr id='out_time'>
                      <td>
                        出院时间:
                      </td>
                      <td>
                        2011年10月1日
                      </td>
                    </tr>
                    <tr id='operation_time'>
                      <td>
                          手术时间:
                      </td>
                      <td>
                        2011年10月1日
                      </td>
                    </tr>
                    <tr id=''>
                      <td>
                          术后住院天数:
                      </td>
                      <td>
                        23天
                      </td>
                    </tr>
                    <tr id='cost'>
                      <td>
                        住院总费用:
                      </td>
                      <td>
                        3232元
                      </td>
                    </tr>
                    <tr id='fist_diagnose_time'>
                      <td>
                          初次诊断为良性<br>前列腺增生症时间:
                      </td>
                      <td>
                        2011年10月1日
                      </td>
                    </tr>
                    <tr id='last_diagnose'>
                      <td>
                         最后诊断:
                      </td>
                      <td>什么都没有<br>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <div class='marginT10 positionR' id='select_area'>
        <span class='tooltip entypo-down-dir' id='update_patient_tooltip'>修改资料</span>
        <span class='span-button entypo-pencil' id='update_patient'></span>
        <div id='info_select' class='positionR'>
          <p>基本信息</p>
          <span class='entypo-up-dir' id='show_info_style'></span>
          <ul class=''>
            <li data-value='临床资料'>临床资料</li>
            <li data-value='评分表'>评分表</li>
            <li data-value='术前实验室检查'>术前实验室检查</li>
            <li data-value='术后早期观察情况'>术后早期观察情况</li>
            <li data-value='随访及影像学检查'>影像学检查</li>
            <li data-value='随访观测指标记录'>随访观测指标记录</li>
            <li data-value='围手术期监测指标记录'>围手术期监测指标记录</li>
            <li data-value='尿动力学检查结果'>尿动力学检查结果</li>
            <li data-value='不良事件及报告表'>不良事件及报告表</li>
          </ul>
        </div>
      </div>
    </div>  