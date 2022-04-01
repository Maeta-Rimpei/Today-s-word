<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            // アインシュタイン
            [
                'id' => '1',
                'word' => '大切なのは、疑問を持ち続けることだ。神聖な好奇心を失ってはならない。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'word' => '天才とは努力する凡才のことである。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'word' => '異性に心を奪われることは、大きな喜びであり、必要不可欠なことです。しかし、それが人生の中心事になってはいけません。もしそうなったら、人は道を見失ってしまうでしょう。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '4',
                'word' => '挫折を経験したことが無い者は、何も新しい事に挑戦したことが無いということだ。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '5',
                'word' => '私は、それほど賢くはありません。ただ、人より長く一つのことと付き合ってきただけなのです。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '6',
                'word' => '蝶はモグラではない。でも、そのことを残念がる蝶はいないだろう。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '7',
                'word' => '常識とは十八歳までに身につけた偏見のコレクションのことをいう。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '8',
                'word' => '何かを学ぶためには、自分で体験する以上にいい方法はない。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '9',
                'word' => '学べば学ぶほど、自分がどれだけ無知であるか思い知らされる。自分の無知に気づけば気づくほど、より一層学びたくなる。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '10',
                'word' => '一見して馬鹿げていないアイデアは、見込みがない。',
                'person_id' => '4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ノーベル
            [
                'id' => 11,
                'word' => '正しい人というのは、たいてい噓つきである。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '12',
                'word' => '類似点と相違点の観察と探索が、すべての知識の基礎であるといっても過言ではない。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '13',
                'word' => '幸せを祈る気持ちだけでは、平和を成すことはできない。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '14',
                'word' => '正義はイマジネーションの中にしか見つけられない。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '15',
                'word' => '私は食べ物よりも哲学の方がよく消化できる。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '16',
                'word' => '私は巨額の相続財産は不幸と考えている。それは単に人々の能力を鈍らせるだけだ。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '17',
                'word' => '１０００個のアイデアがあったとしても１個実現したら良い方だ',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '18',
                'word' => '希望は真実という裸を隠すための天然のベールだ。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '19',
                'word' => '他者の尊敬を伴わない自尊心は、日光の当たらない宝石のようなものだ。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '20',
                'word' => 'この世の中で悪用されないものはない。科学技術の進歩はつねに危険と背中合わせだ。それを乗り越えてはじめて人類の未来に貢献できるのだ。',
                'person_id' => '8',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ガリレオ
            [
                'id' => '21',
                'word' => '見えないと始まらない。見ようとしないと始まらない。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '22',
                'word' => '書物よりも見たり聞いたりすること、地位よりも経験が第一の教育者だ。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '23',
                'word' => '学者は、それゆえという言葉をしきりに使うが、なにゆえ、それゆえなのか俗人には分からない。なにか、偉そうな言葉で誤魔化されているようだ。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '24',
                'word' => '懐疑は発明の父である。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '25',
                'word' => 'どうして君は他人の報告を信じるばかりで、自分の眼で観察したり見たりしなかったのか。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '26',
                'word' => 'あらゆる真実は一度発見されれば理解するのは容易だ。肝心なのは真実を発見することだ。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '27',
                'word' => '言葉や属性こそ、物事の本質に一致すべきであり、逆に本質を言葉に従わせるべきではない。というのは、最初に事物が存在し、言葉はその後に従うものだからである。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '28',
                'word' => '結果にはすべて…原因がある。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '29',
                'word' => '人にものを教えることはできない。みずから気づく手助けができるだけだ。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '30',
                'word' => '数学は、科学へとつながる鍵とドアである。',
                'person_id' => '9',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ガンジー
            [
                'id' => '31',
                'word' => '何か信じるものがあるのに、それに従って生きない人間は信用できない。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '32',
                'word' => '目的を見つけよ。手段は後からついてくる。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '33',
                'word' => '弱い者ほど相手を許すことができない。許すということは、強さの証だ。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '34',
                'word' => 'もし、過ちを犯す自由がないのならば、自由を持つ価値はない。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '35',
                'word' => '死ぬ覚悟が出来ていれば、人は自由に生きられる。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '36',
                'word' => '平和への道はない。平和こそが道なのだ。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '37',
                'word' => 'はじめに彼等は無視し、次に笑い、そして挑みかかるだろう。そうして我々は勝つのだ。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '38',
                'word' => '毎晩眠りにつくたびに、私は死ぬ。そして翌朝目をさますとき、生まれ変わる。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '39',
                'word' => '我々をとりまく全ての物事は常に変化している。変化の源泉は生きる力にある。それは不変であり、結果を生んではまた創造する。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'word' => '喜びとは、勝利それ自体にではなく、途中の戦い、努力、苦闘の中にある。',
                'person_id' => '2',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ハンズ
            [
                'id' => '41',
                'word' => '質問があまりに馬鹿げていると、答えるのは簡単ではない。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '42',
                'word' => '我々はつねに幸せでいることは期待できない。悪を経験することは、善と同様、我々を賢くする。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '43',
                'word' => '太陽は、善人も悪人も等しく照らす。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '44',
                'word' => '全世界は、奇跡の連なりだ。だが我々は慣れすぎて、普通のことと呼び習わしている。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '45',
                'word' => '人生を楽しめ。死ぬ時間はたっぷりある。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '46',
                'word' => '人はどんなに高いところでも登ることができる。しかし、それには決意と自信がなければならない。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '47',
                'word' => '山から遠ざかれば、ますますその本当の姿を見ることができる。友人にしてもこれと同じことです。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '48',
                'word' => '目は目を見ることができない。指は指を指すことができない。誰でも自分のことは案外わからないものだ。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '49',
                'word' => '良いもの、美しいものは忘れられることはありません。それらは神話と歌の中に生きています。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '50',
                'word' => '地球にいる我々の誰もが、持てるものの最高を人に与え、掌中にある何をも差し出すべきではないだろうか。',
                'person_id' => '6',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ヘレンケラー
            [
                'id' => '51',
                'word' => 'うつむいてはいけない。いつも頭を高くあげていなさい。世の中を真っ正面から見つめなさい。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '52',
                'word' => '自分でこんな人間だと思ってしまえば、それだけの人間にしかなれないのです。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '53',
                'word' => '結局、真の知識を得ようと望むものは、誰でも艱難の山を一人で登らなければならず、頂上への王道がない以上、私は曲がりくねりながら登らねばならぬことに気付いたのです。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '54',
                'word' => '目に見えるものは移ろいやすいけれど、目に見えないものは永遠に変わりません。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '55',
                'word' => 'ひとつの幸せのドアが閉じる時、もうひとつのドアが開く。しかし、よく私たちは閉じたドアばかりに目を奪われ、開いたドアに気付かない。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '56',
                'word' => '世界で最も哀れな人とは、目は見えてもビジョンのない人だ。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '57',
                'word' => '人生は胸おどるものです。そしてもっともワクワクするのは、人のために生きるときです。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '58',
                'word' => 'もし幸福な生活を送りたいと思う人々がほんの一瞬でも胸に手を当てて考えれば、心の底からしみじみと感じられる喜びは、足下に生える雑草や朝日にきらめく花の露と同様、無数にあることがわかるでしょう。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '59',
                'word' => '世の中はつらいことでいっぱいですが、それに打ち勝つことも満ち溢れています。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '60',
                'word' => 'はじめはとても難しいことも、続けていけば簡単になります。',
                'person_id' => '3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // フォード
            [
                'id' => '61',
                'word' => '努力が効果をあらわすまでには時間がかかる。多くの人はそれまでに飽き、迷い、挫折する。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '62',
                'word' => '事実がたとえわかっていなくとも、とにかく前進することだ。前進し、行動している間に、事実はわかってくるものだ。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '63',
                'word' => 'たいていの成功者は他人が時間を浪費している間に先へ進む。これは私が長年、この眼で見てきたことである。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '64',
                'word' => '恐るべき競争相手とは、あなたのことをまったく気になどかけず、自分の仕事を常に向上させ続けるような人間のことだ。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '65',
                'word' => '失敗とは、より賢く再挑戦するためのよい機会である。まじめな失敗は、なんら恥ではない。失敗を恐れる心の中にこそ、恥辱は住む。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '66',
                'word' =>  '決断しないことは、ときとして間違った行動よりたちが悪い。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '67',
                'word' => 'ほとんどの人が、成功とは手に入れるものだと考えています。でも本当のところ、成功とは与えることなのです。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '68',
                'word' => 'たいていの人は、問題を解決しようとするよりも、問題を回避するためにより多くの時間とエネルギーを費やしている。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '69',
                'word' => '障害がおそろしいものに見えるのは、目標から目を離すからだ。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '70',
                'word' => '成功の秘訣というものがあるとしたら、それは他人の立場を理解し、自分の立場と同時に他人の立場からも物事を見ることのできる能力である。',
                'person_id' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // 松下
            [
                'id' => '71',
                'word' => '人と比較をして劣っているといっても、決して恥ずることではない。けれども、去年の自分と今年の自分とを比較して、もしも今年が劣っているとしたら、それこそ恥ずべきことである。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '72',
                'word' => '誰でもそうやけど、反省する人は、きっと成功するな。本当に正しく反省する。そうすると次に何をすべきか、何をしたらいかんかということがきちんとわかるからな。それで成長していくわけや、人間として。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '73',
                'word' => '謙虚さを失った確信は、これはもう確信とはいえず、慢心になってしまいます。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '74',
                'word' => '失敗の多くは、成功するまでにあきらめてしまうところに、原因があるように思われる。最後の最後まで、あきらめてはいけないのである。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '75',
                'word' => '失敗の原因を素直に認識し、「これは非常にいい体験だった。尊い教訓になった」というところまで心を開く人は、後日進歩し成長する人だと思います。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '76',
                'word' => '十のサービスを受けたら十一を返す。その余分の一のプラスがなければ、社会は繁栄していかない。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '77',
                'word' => '半分は先輩から教えてもらう、半分は部下から教えてもらう。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '78',
                'word' => '売る前のお世辞より売った後の奉仕、これこそ永久の客を作る。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '79',
                'word' => '無理に売るな。客の好むものも売るな。客のためになるものを売れ。',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '80',
                'word' => '三流は金を残し、二流は事業を残し、一流は人を残す',
                'person_id' => '5',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // エジソン
            [
                'id' => '81',
                'word' => '人生に失敗した人の多くは、諦めたときに自分がどれほど成功に近づいていたか気づかなかった人たちだ。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '82',
                'word' => 'ほとんどすべての人間は、もうこれ以上アイデアを考えるのは不可能だというところまで行きつき、そこでやる気をなくしてしまう。勝負はそこからだというのに。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '83',
                'word' => 'より良い方法は、常に存在している。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '84',
                'word' => '作ったものが計画通りに機能しないからといって、それが無駄とは限らない。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '85',
                'word' => '私は失敗したことがない。ただ、1万通りの、うまく行かない方法を見つけただけだ。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '86',
                'word' => '首から下で稼げるのは1日数ドルだが、首から上を働かせれば無限の富を生み出せる。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '87',
                'word' => '完全に満足しきった人がいたら、それは落伍者だ。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '88',
                'word' =>  'われわれが何かを成し遂げようとしているとき、ルールなどない。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '89',
                'word' => '成功できる人っていうのは、「思い通りに行かない事が起きるのはあたりまえ」という前提を持って挑戦している。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '90',
                'word' => '一日8時間労働制に感じた危機感は、労働時間の不足などではない。働くということが、ただの決まりきった作業になってしまうということだ。',
                'person_id' => '7',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            // ディズニー
            [
                'id' => '91',
                'word' => '夢を求め続ける勇気さえあれば、すべての夢は必ず実現できる。いつだって忘れないでほしい。すべて一匹のねずみから始まったということを。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '92',
                'word' => 'われわれの一番大きい資源は、子供の心である。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '93',
                'word' => '過去の出来事に傷つけられることもあるだろう。でも私が思うに、そこから逃げ出すことも出来るが、そこから学ぶことも出来る。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '94',
                'word' => '私はじっとしている事が出来ない。探索し、実験していないとダメなのだ。私は自分の仕事に満足したことがない。私は自分の想像力の限界に憤る。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '95',
                'word' => '何かを始めるためには、しゃべるのをやめて行動し始めなければならない。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '96',
                'word' => '新しいプロジェクトをひとたびやると決めたら、とことん信じ込むんだ。うまくやる能力があると信じるんだ。そして、これ以上はできないという最高の仕事をするんだ。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '97',
                'word' => 'あなたがやれる最善を尽くしたなら、心配したって事態は良くならない。私もいろいろなことを心配するが、ダムからあふれる水までは心配しない。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '98',
                'word' => '現状維持では、後退するばかりである。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '99',
                'word' => '考えなさい。調査し、探究し、問いかけ、熟考するのです。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => '100',
                'word' =>  '自分たちのために商品をつくってはいけません。人々が求めているものを知って、人々のために商品をつくりなさい。',
                'person_id' => '10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
