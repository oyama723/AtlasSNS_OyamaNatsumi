        <div id="head">
            <h1><a href="/top"><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <!-- <p>〇〇さん</p> -->
                    <p>{{ Auth::user()->name }}さん</p> <!-- ユーザー名を表示 -->
                </div>
                <div id="accordion-container">
                    <div class="accordion-header">
                        <button class="accordion-toggle">メニュー ▼</button> <!-- メニューのトグルボタン -->
                    </div>
                    <ul class="accordion-content">
                        <li><a href="/top">ホーム</a></li>
                        <li><a href="/profile">プロフィール</a></li>
                        <!-- <li><a href="">ログアウト</a></li> -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" style="background:none; border:none; color:blue; cursor:pointer;">ログアウト</button>
                        </form>
                    </ul>
                </div>
            </div>

            <!-- JavaScript for accordion -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const toggleButton = document.querySelector('.accordion-toggle');
                    const content = document.querySelector('.accordion-content');

                    toggleButton.addEventListener('click', function() {
                        content.classList.toggle('open');
                        if (content.classList.contains('open')) {
                            content.style.display = 'block';
                            toggleButton.textContent = 'メニュー ▲';
                        } else {
                            content.style.display = 'none';
                            toggleButton.textContent = 'メニュー ▼';
                        }
                    });

                    // 初期状態ではアコーディオンコンテンツを隠す
                    content.style.display = 'none';
                });
            </script>

            <!-- CSS for accordion -->
            <style>
                #accordion-container {
                    width: 200px;
                    border: 1px solid #ccc;
                    padding: 10px;
                    border-radius: 5px;
                }

                .accordion-header {
                    cursor: pointer;
                }

                .accordion-toggle {
                    background: none;
                    border: none;
                    cursor: pointer;
                    font-size: 1rem;
                    padding: 0;
                }

                .accordion-content {
                    margin-top: 10px;
                    list-style-type: none;
                    padding: 0;
                }

                .accordion-content li {
                    margin: 5px 0;
                }

                .accordion-content.open {
                    display: block;
                }
            </style>
