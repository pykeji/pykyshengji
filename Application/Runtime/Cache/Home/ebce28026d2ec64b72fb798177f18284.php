<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>体质辨识</title>
    <link rel="stylesheet" href="/zysystem1/Public/muban/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/zysystem1/Public/css/tizhi.css">
    <script type="text/javascript" src="/zysystem1/Public/muban/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/zysystem1/Public/muban/assets/js/bootstrap.js"></script>
</head>
<body  oncontextmenu=self.event.returnValue=false onselectstart="return false">
    <div class="bg">
    <div class="xxk">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active">
                <a href="#home" data-toggle="tab">
                    录入基本项目
                </a>
            </li>
            <li><a href="#res" data-toggle="tab">查看结果</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <!--题目-->
                <div class="tab-content" id="myTi">
                    <!--第一题-->
                    <div class="ti tab-pane fade in active" id="ti1">
                        <div class="ti-title">
                            (1)您精力充沛吗？（指精神头足，乐于做事）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx1"><span>1、没有</span></label>
                            <label><input type="radio" name="xx1"><span>2、很少</span></label>
                            <label><input type="radio" name="xx1"><span>3、有时</span></label>
                            <label><input type="radio" name="xx1"><span>4、经常</span></label>
                            <label><input type="radio" name="xx1"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第二题-->
                    <div class="ti tab-pane fade" id="ti2">
                        <div class="ti-title">
                            (2)您容易疲乏吗？（指体力如何，是否稍微活动一下或做一点家务劳动就感到累）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx2"><span>1、没有</span></label>
                            <label><input type="radio" name="xx2"><span>2、很少</span></label>
                            <label><input type="radio" name="xx2"><span>3、有时</span></label>
                            <label><input type="radio" name="xx2"><span>4、经常</span></label>
                            <label><input type="radio" name="xx2"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第三题-->
                    <div class="ti tab-pane fade" id="ti3">
                        <div class="ti-title">
                            (3)您容易气短，呼吸短促，接不上气吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx3"><span>1、没有</span></label>
                            <label><input type="radio" name="xx3"><span>2、很少</span></label>
                            <label><input type="radio" name="xx3"><span>3、有时</span></label>
                            <label><input type="radio" name="xx3"><span>4、经常</span></label>
                            <label><input type="radio" name="xx3"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第四题-->
                    <div class="ti tab-pane fade" id="ti4">
                        <div class="ti-title">
                            (4)您说话声音低弱无力吗?（指说话没有力气）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx4"><span>1、没有</span></label>
                            <label><input type="radio" name="xx4"><span>2、很少</span></label>
                            <label><input type="radio" name="xx4"><span>3、有时</span></label>
                            <label><input type="radio" name="xx4"><span>4、经常</span></label>
                            <label><input type="radio" name="xx4"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第五题-->
                    <div class="ti tab-pane fade" id="ti5">
                        <div class="ti-title">
                            (5)您感到闷闷不乐、情绪低沉吗?（指心情不愉快，情绪低落）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx5"><span>1、没有</span></label>
                            <label><input type="radio" name="xx5"><span>2、很少</span></label>
                            <label><input type="radio" name="xx5"><span>3、有时</span></label>
                            <label><input type="radio" name="xx5"><span>4、经常</span></label>
                            <label><input type="radio" name="xx5"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第六题-->
                    <div class="ti tab-pane fade" id="ti6">
                        <div class="ti-title">
                            (6)您容易精神紧张、焦虑不安吗?（指遇事是否心情紧张）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx6"><span>1、没有</span></label>
                            <label><input type="radio" name="xx6"><span>2、很少</span></label>
                            <label><input type="radio" name="xx6"><span>3、有时</span></label>
                            <label><input type="radio" name="xx6"><span>4、经常</span></label>
                            <label><input type="radio" name="xx6"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第七题-->
                    <div class="ti tab-pane fade" id="ti7">
                        <div class="ti-title">
                            (7)您因为生活状态改变而感到孤独、失落吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx7"><span>1、没有</span></label>
                            <label><input type="radio" name="xx7"><span>2、很少</span></label>
                            <label><input type="radio" name="xx7"><span>3、有时</span></label>
                            <label><input type="radio" name="xx7"><span>4、经常</span></label>
                            <label><input type="radio" name="xx7"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第八题-->
                    <div class="ti tab-pane fade" id="ti8">
                        <div class="ti-title">
                            (8)您容易感到害怕或受到惊吓吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx8"><span>1、没有</span></label>
                            <label><input type="radio" name="xx8"><span>2、很少</span></label>
                            <label><input type="radio" name="xx8"><span>3、有时</span></label>
                            <label><input type="radio" name="xx8"><span>4、经常</span></label>
                            <label><input type="radio" name="xx8"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第九题-->
                    <div class="ti tab-pane fade" id="ti9">
                        <div class="ti-title">
                            (9)您感到身体超重不轻松吗?(感觉身体沉重)[BMI指数=体重（kg）/身高^2（m）]
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx9"><span>1、没有</span></label>
                            <label><input type="radio" name="xx9"><span>2、很少</span></label>
                            <label><input type="radio" name="xx9"><span>3、有时</span></label>
                            <label><input type="radio" name="xx9"><span>4、经常</span></label>
                            <label><input type="radio" name="xx9"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、(BMI&lt;24)</span>
                                <span>2、(24&le;BMI&lt;25)</span>
                                <span>3、(25&le;BMI&lt;26)</span>
                                <span>4、(26&le;BMI&lt;28)</span>
                                <span>5、(BMI&ge;28)</span>
                            </div>
                        </div>
                    </div>
                    <!--第十题-->
                    <div class="ti tab-pane fade" id="ti10">
                        <div class="ti-title">
                            (10)您眼睛干涩吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx10"><span>1、没有</span></label>
                            <label><input type="radio" name="xx10"><span>2、很少</span></label>
                            <label><input type="radio" name="xx10"><span>3、有时</span></label>
                            <label><input type="radio" name="xx10"><span>4、经常</span></label>
                            <label><input type="radio" name="xx10"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第十一题-->
                    <div class="ti tab-pane fade" id="ti11">
                        <div class="ti-title">
                            (11)您手脚发凉吗?（不包含周围温度低或穿的少导致的手脚发冷）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx11"><span>1、没有</span></label>
                            <label><input type="radio" name="xx11"><span>2、很少</span></label>
                            <label><input type="radio" name="xx11"><span>3、有时</span></label>
                            <label><input type="radio" name="xx11"><span>4、经常</span></label>
                            <label><input type="radio" name="xx11"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第12题-->
                    <div class="ti tab-pane fade" id="ti12">
                        <div class="ti-title">
                            (12)您胃脘部、背部或腰膝部怕冷吗？（指上腹部、背部、腰部或膝关节等，有一处或多处怕冷）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx12"><span>1、没有</span></label>
                            <label><input type="radio" name="xx12"><span>2、很少</span></label>
                            <label><input type="radio" name="xx12"><span>3、有时</span></label>
                            <label><input type="radio" name="xx12"><span>4、经常</span></label>
                            <label><input type="radio" name="xx12"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第13题-->
                    <div class="ti tab-pane fade" id="ti13">
                        <div class="ti-title">
                            (13)您比一般人耐受不了寒冷吗？（指比别人容易害怕冬天或是夏天的冷空调、电扇等）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx13"><span>1、没有</span></label>
                            <label><input type="radio" name="xx13"><span>2、很少</span></label>
                            <label><input type="radio" name="xx13"><span>3、有时</span></label>
                            <label><input type="radio" name="xx13"><span>4、经常</span></label>
                            <label><input type="radio" name="xx13"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第14题-->
                    <div class="ti tab-pane fade" id="ti14">
                        <div class="ti-title">
                            (14)您容易患感冒吗?（指每年感冒的次数）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx14"><span>1、没有</span></label>
                            <label><input type="radio" name="xx14"><span>2、很少</span></label>
                            <label><input type="radio" name="xx14"><span>3、有时</span></label>
                            <label><input type="radio" name="xx14"><span>4、经常</span></label>
                            <label><input type="radio" name="xx14"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、一年&lt;2次</span>
                                <span>2、一年感冒2-4次</span>
                                <span>3、一年感冒5-6次</span>
                                <span>4、一年感冒8次以上</span>
                                <span>5、几乎每月都感冒</span>
                            </div>
                        </div>
                    </div>
                    <!--第15题-->
                    <div class="ti tab-pane fade" id="ti15">
                        <div class="ti-title">
                            (15)您没有感冒时也会鼻塞、流鼻涕吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx15"><span>1、没有</span></label>
                            <label><input type="radio" name="xx15"><span>2、很少</span></label>
                            <label><input type="radio" name="xx15"><span>3、有时</span></label>
                            <label><input type="radio" name="xx15"><span>4、经常</span></label>
                            <label><input type="radio" name="xx15"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第16题-->
                    <div class="ti tab-pane fade" id="ti16">
                        <div class="ti-title">
                            (16)您有口黏口腻，或睡眠打鼾吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx16"><span>1、没有</span></label>
                            <label><input type="radio" name="xx16"><span>2、很少</span></label>
                            <label><input type="radio" name="xx16"><span>3、有时</span></label>
                            <label><input type="radio" name="xx16"><span>4、经常</span></label>
                            <label><input type="radio" name="xx16"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第17题-->
                    <div class="ti tab-pane fade" id="ti17">
                        <div class="ti-title">
                            (17)您容易过敏(对药物、食物、气味、花粉或在季节交替、气候变化时)吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx17"><span>1、没有</span></label>
                            <label><input type="radio" name="xx17"><span>2、很少</span></label>
                            <label><input type="radio" name="xx17"><span>3、有时</span></label>
                            <label><input type="radio" name="xx17"><span>4、经常</span></label>
                            <label><input type="radio" name="xx17"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、从来没有</span>
                                <span>2、一年1、2次</span>
                                <span>3、一年3、4次</span>
                                <span>4、一年5、6次</span>
                                <span>5、每次遇到上述原因都过敏</span>
                            </div>
                        </div>
                    </div>
                    <!--第18题-->
                    <div class="ti tab-pane fade" id="ti18">
                        <div class="ti-title">
                            (18)您的皮肤容易起荨麻疹吗? (包括风团、风疹块、风疙瘩)
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx18"><span>1、没有</span></label>
                            <label><input type="radio" name="xx18"><span>2、很少</span></label>
                            <label><input type="radio" name="xx18"><span>3、有时</span></label>
                            <label><input type="radio" name="xx18"><span>4、经常</span></label>
                            <label><input type="radio" name="xx18"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第19题-->
                    <div class="ti tab-pane fade" id="ti19">
                        <div class="ti-title">
                            (19)您的皮肤在不知不觉中会出现青紫瘀斑、皮下出血吗?（指皮肤在没有外伤的情况下出现青一块紫一块的情况）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx19"><span>1、没有</span></label>
                            <label><input type="radio" name="xx19"><span>2、很少</span></label>
                            <label><input type="radio" name="xx19"><span>3、有时</span></label>
                            <label><input type="radio" name="xx19"><span>4、经常</span></label>
                            <label><input type="radio" name="xx19"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第20题-->
                    <div class="ti tab-pane fade" id="ti20">
                        <div class="ti-title">
                            (20)您的皮肤一抓就红，并出现抓痕吗?（指被指甲或钝物划过后皮肤的反应）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx20"><span>1、没有</span></label>
                            <label><input type="radio" name="xx20"><span>2、很少</span></label>
                            <label><input type="radio" name="xx20"><span>3、有时</span></label>
                            <label><input type="radio" name="xx20"><span>4、经常</span></label>
                            <label><input type="radio" name="xx20"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第21题-->
                    <div class="ti tab-pane fade" id="ti21">
                        <div class="ti-title">
                            (21)您皮肤或口唇干吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx21"><span>1、没有</span></label>
                            <label><input type="radio" name="xx21"><span>2、很少</span></label>
                            <label><input type="radio" name="xx21"><span>3、有时</span></label>
                            <label><input type="radio" name="xx21"><span>4、经常</span></label>
                            <label><input type="radio" name="xx21"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第22题-->
                    <div class="ti tab-pane fade" id="ti22">
                        <div class="ti-title">
                            (22)您有肢体麻或固定部位疼痛的感觉吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx22"><span>1、没有</span></label>
                            <label><input type="radio" name="xx22"><span>2、很少</span></label>
                            <label><input type="radio" name="xx22"><span>3、有时</span></label>
                            <label><input type="radio" name="xx22"><span>4、经常</span></label>
                            <label><input type="radio" name="xx22"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第23题-->
                    <div class="ti tab-pane fade" id="ti23">
                        <div class="ti-title">
                            (23)您面部或鼻部有油腻感或者油亮发光吗?（指脸上或鼻子）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx23"><span>1、没有</span></label>
                            <label><input type="radio" name="xx23"><span>2、很少</span></label>
                            <label><input type="radio" name="xx23"><span>3、有时</span></label>
                            <label><input type="radio" name="xx23"><span>4、经常</span></label>
                            <label><input type="radio" name="xx23"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第24题-->
                    <div class="ti tab-pane fade" id="ti24">
                        <div class="ti-title">
                            (24)您面色或目眶晦黯，或出现褐色斑块/斑点吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx24"><span>1、没有</span></label>
                            <label><input type="radio" name="xx24"><span>2、很少</span></label>
                            <label><input type="radio" name="xx24"><span>3、有时</span></label>
                            <label><input type="radio" name="xx24"><span>4、经常</span></label>
                            <label><input type="radio" name="xx24"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第25题-->
                    <div class="ti tab-pane fade" id="ti25">
                        <div class="ti-title">
                            （25）您有皮肤湿疹、疮疖吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx25"><span>1、没有</span></label>
                            <label><input type="radio" name="xx25"><span>2、很少</span></label>
                            <label><input type="radio" name="xx25"><span>3、有时</span></label>
                            <label><input type="radio" name="xx25"><span>4、经常</span></label>
                            <label><input type="radio" name="xx25"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第26题-->
                    <div class="ti tab-pane fade" id="ti26">
                        <div class="ti-title">
                            (26)您感到口干咽燥、总想喝水吗？
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx26"><span>1、没有</span></label>
                            <label><input type="radio" name="xx26"><span>2、很少</span></label>
                            <label><input type="radio" name="xx26"><span>3、有时</span></label>
                            <label><input type="radio" name="xx26"><span>4、经常</span></label>
                            <label><input type="radio" name="xx26"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第27题-->
                    <div class="ti tab-pane fade" id="ti27">
                        <div class="ti-title">
                            (27)您感到口苦或嘴里有异味吗?（指口苦或口臭）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx27"><span>1、没有</span></label>
                            <label><input type="radio" name="xx27"><span>2、很少</span></label>
                            <label><input type="radio" name="xx27"><span>3、有时</span></label>
                            <label><input type="radio" name="xx27"><span>4、经常</span></label>
                            <label><input type="radio" name="xx27"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第28题-->
                    <div class="ti tab-pane fade" id="ti28">
                        <div class="ti-title">
                            (28)您腹部肥大吗?（指腹部脂肪肥厚）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx28"><span>1、没有</span></label>
                            <label><input type="radio" name="xx28"><span>2、很少</span></label>
                            <label><input type="radio" name="xx28"><span>3、有时</span></label>
                            <label><input type="radio" name="xx28"><span>4、经常</span></label>
                            <label><input type="radio" name="xx28"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、腹围&lt;80cm，相当于2.4尺</span>
                                <span>2、腹围80-85cm，2.4-2.55尺</span>
                                <span>3、腹围86-90cm，2.56-2.7尺</span>
                                <span>4、腹围91-105cm，2.71-3.15尺</span>
                                <span>5、腹围&gt;105cm，3.15尺</span>
                            </div>
                        </div>
                    </div>
                    <!--第29题-->
                    <div class="ti tab-pane fade" id="ti29">
                        <div class="ti-title">
                            (29)您吃(喝)凉的东西会感到不舒服或者怕吃(喝)凉的东西吗？（指不喜欢吃凉的食物，或吃了凉的食物后会不舒服）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx29"><span>1、没有</span></label>
                            <label><input type="radio" name="xx29"><span>2、很少</span></label>
                            <label><input type="radio" name="xx29"><span>3、有时</span></label>
                            <label><input type="radio" name="xx29"><span>4、经常</span></label>
                            <label><input type="radio" name="xx29"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第30题-->
                    <div class="ti tab-pane fade" id="ti30">
                        <div class="ti-title">
                            (30)您有大便黏滞不爽、解不尽的感觉吗?(大便容易粘在马桶上)
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx30"><span>1、没有</span></label>
                            <label><input type="radio" name="xx30"><span>2、很少</span></label>
                            <label><input type="radio" name="xx30"><span>3、有时</span></label>
                            <label><input type="radio" name="xx30"><span>4、经常</span></label>
                            <label><input type="radio" name="xx30"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第31题-->
                    <div class="ti tab-pane fade" id="ti31">
                        <div class="ti-title">
                            (31)您容易大便干燥吗?
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx31"><span>1、没有</span></label>
                            <label><input type="radio" name="xx31"><span>2、很少</span></label>
                            <label><input type="radio" name="xx31"><span>3、有时</span></label>
                            <label><input type="radio" name="xx31"><span>4、经常</span></label>
                            <label><input type="radio" name="xx31"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第32题-->
                    <div class="ti tab-pane fade" id="ti32">
                        <div class="ti-title">
                            (32)您舌苔厚腻或有舌苔厚厚的感觉吗?（如果自我感觉不清楚可由调查员观察后填写）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx32"><span>1、没有</span></label>
                            <label><input type="radio" name="xx32"><span>2、很少</span></label>
                            <label><input type="radio" name="xx32"><span>3、有时</span></label>
                            <label><input type="radio" name="xx32"><span>4、经常</span></label>
                            <label><input type="radio" name="xx32"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                    <!--第33题-->
                    <div class="ti tab-pane fade" id="ti33">
                        <div class="ti-title">
                            (33)您舌下静脉瘀紫或增粗吗？（可由调查员辅助观察后填写）
                        </div>
                        <div class="ti-content">
                            <label><input type="radio" name="xx33"><span>1、没有</span></label>
                            <label><input type="radio" name="xx33"><span>2、很少</span></label>
                            <label><input type="radio" name="xx33"><span>3、有时</span></label>
                            <label><input type="radio" name="xx33"><span>4、经常</span></label>
                            <label><input type="radio" name="xx33"><span>5、总是</span></label>
                        </div>
                        <!--提示-->
                        <div class="prompt">
                            <div class="pro-title">选项提示</div>
                            <div class="pro-inf">
                                <span>1、没有（根本不/从来没有）</span>
                                <span>2、很少（有一点/偶尔）</span>
                                <span>3、有时（有些/少数时间）</span>
                                <span>4、经常（相当/多数时间）</span>
                                <span>5、总是（非常/每天）</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--上下题-->
                <div class="updown">
                    <button type="button" class="but" id="syt">上一题</button>
                    <button type="button" id="xyt">下一题</button>
                </div>
                <!--题号-->
                <div class="tiNum">
                    <table class="nav nav-tabs" id="myTiContent">
                        <tr>
                            <td class="sty1" id="xx1"><a href="#ti1" data-toggle="tab">1</a></td>
                            <td id="xx2"><a href="#ti2" data-toggle="tab">2</a></td>
                            <td id="xx3"><a href="#ti3" data-toggle="tab">3</a></td>
                            <td id="xx4"><a href="#ti4" data-toggle="tab">4</a></td>
                            <td id="xx5"><a href="#ti5" data-toggle="tab">5</a></td>
                            <td id="xx6"><a href="#ti6" data-toggle="tab">6</a></td>
                            <td id="xx7"><a href="#ti7" data-toggle="tab">7</a></td>
                            <td id="xx8"><a href="#ti8" data-toggle="tab">8</a></td>
                            <td id="xx9"><a href="#ti9" data-toggle="tab">9</a></td>
                            <td id="xx10"><a href="#ti10" data-toggle="tab">10</a></td>
                            <td id="xx11"><a href="#ti11" data-toggle="tab">11</a></td>
                        </tr>
                        <tr>
                            <td id="xx12"><a href="#ti12" data-toggle="tab">12</a></td>
                            <td id="xx13"><a href="#ti13" data-toggle="tab">13</a></td>
                            <td id="xx14"><a href="#ti14" data-toggle="tab">14</a></td>
                            <td id="xx15"><a href="#ti15" data-toggle="tab">15</a></td>
                            <td id="xx16"><a href="#ti16" data-toggle="tab">16</a></td>
                            <td id="xx17"><a href="#ti17" data-toggle="tab">17</a></td>
                            <td id="xx18"><a href="#ti18" data-toggle="tab">18</a></td>
                            <td id="xx19"><a href="#ti19" data-toggle="tab">19</a></td>
                            <td id="xx20"><a href="#ti20" data-toggle="tab">20</a></td>
                            <td id="xx21"><a href="#ti21" data-toggle="tab">21</a></td>
                            <td id="xx22"><a href="#ti22" data-toggle="tab">22</a></td>
                        </tr>
                        <tr>
                            <td id="xx23"><a href="#ti23" data-toggle="tab">23</a></td>
                            <td id="xx24"><a href="#ti24" data-toggle="tab">24</a></td>
                            <td id="xx25"><a href="#ti25" data-toggle="tab">25</a></td>
                            <td id="xx26"><a href="#ti26" data-toggle="tab">26</a></td>
                            <td id="xx27"><a href="#ti27" data-toggle="tab">27</a></td>
                            <td id="xx28"><a href="#ti28" data-toggle="tab">28</a></td>
                            <td id="xx29"><a href="#ti29" data-toggle="tab">29</a></td>
                            <td id="xx30"><a href="#ti30" data-toggle="tab">30</a></td>
                            <td id="xx31"><a href="#ti31" data-toggle="tab">31</a></td>
                            <td id="xx32"><a href="#ti32" data-toggle="tab">32</a></td>
                            <td id="xx33"><a href="#ti33" data-toggle="tab">33</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="res">
                <!--报告-->
                <div class="report">
                    <div class="reportinf center">
                        <!--报告表单-->
                        <form action="#" method="post">
                            <div class="rep-title">中医体制辨识鉴定报告</div>
                            <div>
                                <table border="1" width="90%" class="center">
                                    <tr>
                                        <td>姓名</td>
                                        <td colspan="2">阿布</td>
                                        <td>性别</td>
                                        <td>男</td>
                                        <td>年龄</td>
                                        <td>36岁</td>
                                        <td>日期</td>
                                        <td colspan="3">2016-12-16</td>
                                    </tr>
                                    <tr>
                                        <td>身份证号</td>
                                        <td colspan="6"></td>
                                        <td>联系方式</td>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td>工作单位</td>
                                        <td colspan="10"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">体制类型</td>
                                        <td colspan="2">平和质[体制1]</td>
                                        <td colspan="2">气虚质[体制2]</td>
                                        <td colspan="2">阳虚质[体制3]</td>
                                        <td colspan="2">阴虚质[体制4]</td>
                                        <td colspan="2">痰湿质[体制5]</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">湿热质[体制6]</td>
                                        <td colspan="2">血瘀质[体制7]</td>
                                        <td colspan="2">气郁质[体制8]</td>
                                        <td colspan="2">特禀质[体制9]</td>
                                        <td colspan="2"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="rep-title1">气虚质</div>
                            <div class="rep-title1">1.情致调摄</div>
                            <div class="rep-inf">
                                <p>以保持稳定乐观心态</p>
                            </div>
                        </form>
                        <!--分类-->
                        <div class="tztitle">测试结果表</div>
                        <div class="tzstyle">
                            <table width="98%" border="1" bordercolor="#cccccc" class="center">
                                <tr>
                                    <td>体制分类</td>
                                    <td>总分</td>
                                    <td>测试结果</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="anniu">
                <button type="button" class="btn btn-warning">提交</button>
                <button type="button" class="btn btn-warning">保存</button>
                <button type="button" class="btn btn-warning">另存为</button>
                <button type="button" class="btn btn-warning">打印</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/zysystem1/Public/js/tizhi.js"></script>