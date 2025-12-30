<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'image' => "images/harry_potter.jpg",
                'description_id' => null,
                'description_en' => "Harry Potter and the Sorcerer's Stone is a fantasy novel by J.K. Rowling that tells the story of Harry Potter's early adventures after discovering he is a wizard. He enters the magical world of Hogwarts and faces the mystery of the Philosopher's Stone, a dangerous underworld. The novel explores themes of friendship, courage, and the struggle between good and evil.",
                'publish_year' => '1997',
                'publisher' => 'Bloomsbury',
                'authors' => ['J.K. Rowling'],
                'categories' => [ 'Novel','Fantasy', 'Fiction'],
                'link' => "https://drive.google.com/file/d/1bEWHSTPEVu-36in5t4TOS2sDqsOeYAhk/view?usp=sharing"
            ],
            [
                'title' => 'Laskar Pelangi',
                'image' => "images/laskar_pelangi.jpg",
                'description_id' => null,
                'description_en' => "'Laskar Pelangi' is a novel by Andrea Hirata that tells the story of a group of children from modest families in Belitung Island who struggle to achieve education. The story highlights the spirit of learning, friendship, and hope amidst limitations, and teaches that education can change the future.",
                'publish_year' => '2005',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Motivation', 'Drama'],
                'link' => "https://drive.google.com/file/d/1Txe9XAKiuNep26bFLbIKrf31MsO5BbHd/view?usp=drive_link"
            ],
            [
                'title' => 'The Hobbit',
                'image' => "images/the_hobbit.jpg",
                'description_id' => null,
                'description_en' => "The Hobbit is a fantasy novel by J.R.R. Tolkien that tells the adventures of Bilbo Baggins, a quiet hobbit who embarks on a perilous journey with a group of dwarves and the wizard Gandalf. Their goal is to reclaim the treasure and kingdom held by the dragon Smaug. The novel highlights themes of courage, friendship, and personal transformation, and serves as an introduction to the legendary world of Middle-earth.",
                'publish_year' => '1937',
                'publisher' => 'George Allen & Unwin',
                'authors' => ['J.R.R. Tolkien'],
                'categories' => ['Novel','Fantasy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1RXPHECuv95ixzyEXBC43_6msFWB840xz/view?usp=drive_link"      

            ],
            [
                'title' => 'Bumi Manusia',
                'image' => "images/bumi_manusia.jpg",
                'description_id' => null,
                'description_en' => "'Bumi Manusia' is a novel by Pramoedya Ananta Toer that tells the story of Minke, an educated native Indonesian during the Dutch colonial period. The novel highlights social inequality, colonialism, and the struggle for identity through the conflict between the natives and the colonialists. It also emphasizes the importance of education, self-awareness, and resistance against injustice.",
                'publish_year' => '1980',
                'publisher' => 'Hasta Mitra',
                'authors' => ['Pramoedya Ananta Toer'],
                'categories' => ['Novel','History', 'Drama'],
                'link' => "https://drive.google.com/file/d/1fv1r8p_D72aW7mb1yD12CtqXxH_3aOyp/view?usp=drive_link"
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'image' => "images/to_kill_a_mockingbird.jpg",
                'description_id' => null,
                'description_en' => 'To Kill a Mockingbird is a novel by Harper Lee that addresses racial injustice through the perspective of a young girl named Scout. The story highlights morality, empathy, and courage in standing up for justice',
                'publish_year' => '1960',
                'publisher' => 'J.B. Lippincott & Co.',
                'authors' => ['Harper Lee'],
                'categories' => ['Novel','Drama', 'Classic'],
                'link' => "https://drive.google.com/file/d/10AamgFliRT5nizeSXDkSgYMKNyCsTmsJ/view?usp=drive_link"      
            ],
            [
                'title' => '5 CM',
                'image' => "images/5cm.jpg",
                'description_id' => null,
                'description_en' => "5 CM is a novel by Donny Dhirgantoro about the friendship of five young people who strive to achieve their dreams. The novel emphasizes motivation, friendship, and love for the country.",
                'publish_year' => '2005',
                'publisher' => 'Grasindo',
                'authors' => ['Donny Dhirgantoro'],
                'categories' => ['Novel','Adventure', 'Drama', 'Motivation'],
                'link' => "https://drive.google.com/file/d/1o27_F24bUbflTWC9_ZBSxD3BPioTwO2H/view?usp=drive_link"      
            ],
            [
                'title' => 'The Great Gatsby',
                'image' => "images/the_great_gatsby.jpg",
                'description_id' => null,
                'description_en' =>"The Great Gatsby is a novel by F. Scott Fitzgerald that portrays wealth, ambition, and illusion in 1920s America. The story critiques the American Dream and explores themes of love and moral decay.",
                'publish_year' => '1925',
                'publisher' => 'Charles Scribner\'s Sons',
                'authors' => ['F. Scott Fitzgerald'],
                'categories' => ['Classic', 'Drama'],
                'link' => "https://drive.google.com/file/d/1vm2BctmETPvv36Pvo6E5fYEONDkcQBs6/view?usp=drive_link"      
            ],
            [
                'title' => 'Negeri 5 Menara',
                'image' => "images/negeri_5_menara.jpg",
                'description_id' => null,
                'description_en' => "egeri 5 Menara is a novel by Ahmad Fuadi that tells the story of six students studying at an Islamic boarding school while pursuing their dreams. The novel highlights friendship, education, and perseverance.",
                'publish_year' => '2009',
                'publisher' => 'Gramedia',
                'authors' => ['Ahmad Fuadi'],
                'categories' => ['Motivation', 'Drama'],
                'link' =>"https://drive.google.com/file/d/11ewhKzRQD9Hec-g2XzOFFGkAMqrZlga3/view?usp=drive_link"      
            ],
            [
                'title' => 'The Catcher in the Rye',
                'image' => "images/catcher_in_the_rye.jpg",
                'description_id' => null,
                'description_en' =>"The Catcher in the Rye is a novel by J.D. Salinger that tells the story of Holden Caulfield, a teenager struggling with adulthood and society. The novel explores themes of identity, alienation, and the loss of innocence.",
                'publish_year' => '1951',
                'publisher' => 'Little, Brown and Company',
                'authors' => ['J.D. Salinger'],
                'categories' => ['Drama', 'Classic'],
                'link' => "https://drive.google.com/file/d/1wJxTOxfhsIUt8J8PDcNkafv3NR7zmhwH/view?usp=drive_link"     
            ],
            [
                'title' => 'Pulang',
                'image' => "images/pulang.jpg",
                'description_id' => null,
                'description_en' => "Pulang is a novel by Tere Liye that chronicles the life journey of a young man involved in a world of crime and a cross-country escape. The story emphasizes the meaning of family, loyalty, and the significance of returning home as a process of rediscovering one's identity.",
                'publish_year' => '2015',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Action', 'Drama'],
                'link' => "https://drive.google.com/file/d/1QzCZ-iyvdStXVmZu4CuPuvuJHqOeKeZm/view?usp=drive_link"      
            ],
            [
                'title' => 'The Fault in Our Stars',
                'image' => "images/fault_in_our_stars.jpg",
                'description_id' => null,
                'description_en' => 'The Fault in Our Stars is a novel by John Green that tells the love story of Hazel Grace and Augustus Waters, two teenagers with cancer. The novel explores themes of love, loss, and the meaning of life in an emotional yet realistic way.',
                'publish_year' => '2012',
                'publisher' => 'Dutton Books',
                'authors' => ['John Green'],
                'categories' => ['Novel','Romance', 'Drama'],
                'link' => "https://drive.google.com/file/d/1c5NwqbiAaYLZdQ0CdIjs2-ozob75WseW/view?usp=drive_link"     
            ],
            [
                'title' => 'Perahu Kertas',
                'image' => "images/perahu_kertas.jpg",
                'description_id' => null,
                'description_en' => "'Perahu Kertas' is a novel by Dee Lestari that chronicles the love story and dreams of Kugy and Keenan. The story highlights their search for identity, idealism, and life choices that often clash with reality.",
                'publish_year' => '2009',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Novel','Romance', 'Drama'],
                'link' => "https://drive.google.com/file/d/1X18V4ZfQDhwSQyz2ajA6nj6U8iKqEcnf/view?usp=drive_link"     
            ],
            [
                'title' => '1984',
                'image' => "images/1984.jpg",
                'description_id' => null,
                'description_en' => "1984 is a dystopian novel by George Orwell that depicts life in a totalitarian state where the government controls every aspect of its citizens' lives. The story focuses on Winston Smith, a clerk who begins to question truth and freedom amidst the dominance of Big Brother. The novel explores themes of oppression, information manipulation, and the loss of freedom of thought within a system of absolute power.",
                'publish_year' => '1949',
                'publisher' => 'Secker & Warburg',
                'authors' => ['George Orwell'],
                'categories' => ['Political','Fiction'],
                'link' => "https://drive.google.com/file/d/1OG99Yg1coo7j2NHhGGQSTWJnUUoLv4bv/view?usp=drive_link"     
            ],
            [
                'title' => 'Koala Kumal',
                'image' => "images/koala_kumal.jpg",
                'description_id' => null,
                'description_en' => 'Koala Kumal is a book by Raditya Dika, a collection of humorous stories and personal experiences, primarily centered around love, heartbreak, and everyday life. With a light and humorous style, the book conveys simple reflections on failed relationships and the process of coming to terms with the past. The story is both entertaining and relatable to readers.',
                'publish_year' => '2015',
                'publisher' => 'GagasMedia',
                'authors' => ['Raditya Dika'],
                'categories' => ['Humor', 'Drama'],
                'link' => "https://drive.google.com/file/d/1vy8QbESMUFyEMEA-jBxQgazyo9Xoc9bG/view?usp=drive_link"    
            ],
            [
                'title' => 'The Alchemist',
                'image' => "images/the_alchemist.jpg",
                'description_id' => null,
                'description_en' => "The Alchemist is a novel by Paulo Coelho that tells the story of Santiago, a young shepherd, in search of treasure and the meaning of life. Along the way, Santiago learns about dreams, courage, and the importance of following one's heart. The novel is filled with philosophical messages about the search for identity and the belief that everyone has a destiny to fight for.",
                'publish_year' => '1988',
                'publisher' => 'HarperTorch',
                'authors' => ['Paulo Coelho'],
                'categories' => ['Philosophy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1WVNqyqLgqXlQi4P8iI2xNFzONLlEVg-q/view?usp=drive_link"   
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'image' => "images/rembulan.jpg",
                'description_id' => null,
                'description_en' => 'Rembulan Tenggelam di Wajahmu is a novel by Tere Liye that chronicles the life journey of Ray, a man with a dark past filled with pain and suffering. The story unfolds through reflections and flashbacks that reveal the meaning of justice, destiny, and compassion in human life. With an emotional and philosophical plot, this novel invites readers to reflect on the fact that every event in life has its own reason and meaning.',
                'publish_year' => '2009',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Drama', 'Philosophy'],
                'link' => "https://drive.google.com/file/d/1C9JirzZBGd8GDotGuUT7gKPetWY7mhFM/view?usp=drive_link"    
            ],
            [
                'title' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe',
                'image' => "images/narnia.jpg",
                'description_id' => null,
                'description_en' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe is a fantasy novel by C.S. Lewis that tells the adventures of four siblings—Peter, Susan, Edmund, and Lucy—in the magical world of Narnia. Through a wardrobe, they enter a land ruled by the White Witch and plunged into eternal winter. With the help of Aslan the lion, the children become involved in a struggle between good and evil. The novel explores themes of courage, sacrifice, and hope, and has become one of the most influential works of classic fantasy.',
                'publish_year' => '1950',
                'publisher' => 'Geoffrey Bles',
                'authors' => ['C.S. Lewis'],
                'categories' => ['Novel','Fantasy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1Wx4cP6u-Q5rhEilJaD_WbmDv0MiOFFUm/view?usp=drive_link"   
            ],
            [
                'title' => 'Hujan',
                'image' => "images/hujan.jpg",
                'description_id' => null,
                'description_en' => "Rain is a novel by Tere Liye which tells the story of Lail and Esok's life journey in the middle of a futuristic world hit by a major disaster. This story combines stories of love, friendship and sacrifice against the backdrop of technological progress and extreme climate change. This novel conveys a message about loss, memories, and sincerity in accepting the past in order to move into the future.",
                'publish_year' => '016',
                'publisher' => 'Gramedia',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Drama', 'Sci-Fi'],
                'link' => "https://drive.google.com/file/d/1EPf2Tt_OsU1NoLzFV5XqUTxRhWV_PVMv/view?usp=drive_link"    
            ],
            [
                'title' => 'The Da Vinci Code',
                'image' => "images/da_vinci_code.jpg",
                'description_id' => null,
                'description_en' => "The Da Vinci Code is a thriller novel by Dan Brown that follows Robert Langdon's adventures in solving a murder mystery at the Louvre Museum in Paris. His investigation leads Langdon on a series of puzzles, symbols, codes, and historical secrets connected to the Church and the work of Leonardo da Vinci. The novel blends art, history, and conspiracy in a suspenseful and surprising plot.",
                'publish_year' => '2003',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Thriller', 'Mystery'],
                'link' => "https://drive.google.com/file/d/1VRTGRxSV0H5via-AAwdHy-7NCHm3EgB8/view?usp=drive_link"     
            ],
            [
                'title' => 'Sabtu Bersama Bapak',
                'image' => "images/sabtu_bersama_bapak.jpg",
                'description_id' => null,
                'description_en' => "Saturday with Father is a novel by Adhitya Mulya that tells the story of a father who leaves life messages for his wife and children through a video recording before his death. The story focuses on the values ​​of family, love, and a father's responsibility in guiding his children through life. This novel is touching and meaningful, teaching the importance of presence, communication, and affection within a family.",
                'publish_year' => '2014',
                'publisher' => 'GagasMedia',
                'authors' => ['Adhitya Mulya'],
                'categories' => ['Drama', 'Keluarga'],
                'link' => "https://drive.google.com/file/d/1tkt8nJPambgRk9P5L_i0b_6CrXHxxC6g/view?usp=drive_link"    
            ],
            [
                'title' => 'Sang Pemimpi',
                'image' => "images/sang_pemimpi.jpg",
                'description_id' => null,
                'description_en' => "Sang Pemimpi is a novel by Andrea Hirata, a sequel to Laskar Pelangi. It chronicles the struggles of Ikal, Arai, and Jimbron to achieve their dreams and a better future through education. Set against the backdrop of a simple life in Belitung, the story is filled with the values ​​of friendship, an unyielding spirit, and the belief that dreams can change one's life.",
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Novel','Drama', 'Inspiratif'],
                'link' => "https://drive.google.com/file/d/1E_K8xJNjYDf1WEx8pBJNV-GjuCJXb_9q/view?usp=drive_link"    
            ],
            [
                'title' => 'Origin',
                'image' => "images/origin.jpg",
                'description_id' => null,
                'description_en' => "Origin is a thriller novel by Dan Brown that follows Robert Langdon's adventures in uncovering a revolutionary scientific discovery that has the potential to change humanity's understanding of the origins of life and the future of humanity. Set in Spain, the story blends science, technology, religion, and symbolism with high tension. The novel explores the conflict between traditional beliefs and modern scientific advancements.",
                'publish_year' => '2017',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Novel','Thriller', 'Mystery'],
                'link' => "https://drive.google.com/file/d/1D8UURGKM7voJuaAGcPTckPvaTwuECRjg/view?usp=drive_link"     
            ],
            [
                'title' => 'Habis Gelap Terbitlah Terang',
                'image' => "images/habis_gelap.jpg",
                'description_id' => null,
                'description_en' => "'After Darkness Comes Light' is a collection of letters by R.A. Kartini, chronicling her thoughts and struggles for women's emancipation in Indonesia. Through these writings, Kartini advocates the importance of education, freedom of thought, and equal rights for women. This work reflects the spirit of change, hope, and optimism that progress will emerge after a period of backwardness and injustice.",
                'publish_year' => '1922',
                'publisher' => 'Balai Pustaka',
                'authors' => ['R.A. Kartini'],
                'categories' => ['Sejarah', 'Biografi'],
                'link' => "https://drive.google.com/file/d/1GVqhwdpGAgn9Keti4W632z_n7-vgd6_8/view?usp=drive_link"     
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'image' => "images/rich_dad_poor_dad.jpg",
                'description_id' => null,
                'description_en' => 'Rich Dad Poor Dad is a self-development and financial book by Robert T. Kiyosaki that explores the differences in mindset between rich and poor people. By comparing two father figures—"rich dad" and "poor dad"—the book emphasizes the importance of financial literacy, asset management, and how to make money work for us. It encourages readers to develop smart financial habits, think independently, and boldly embrace investment opportunities to achieve financial freedom.',
                'publish_year' => '1997',
                'publisher' => 'Warner Books',
                'authors' => ['Robert T. Kiyosaki'],
                'categories' => ['Financial', 'Motivation'],
                'link' => "https://drive.google.com/file/d/1TdmENxXK3Ra-jTlqX6DAoqQG_YFIFVRo/view?usp=drive_link"
            ],
            [
                'title' => 'The Silent Patient',
                'image' => "images/the_silent_patient.jpg",
                'description_id' => null,
                'description_en' => "The Silent Patient is a psychological thriller by Alex Michaelides. It tells the story of Alicia Berenson, a renowned painter who suddenly murders her husband and then chooses to remain silent. The story focuses on a psychotherapist's efforts to uncover the reasons behind Alicia's silence and the mystery surrounding the case. With a plot full of suspense and surprises, the novel explores the dark side of human psychology and hidden trauma.",
                'publish_year' => '2019',
                'publisher' => 'Celadon Books',
                'authors' => ['Alex Michaelides'],
                'categories' => ['Novel','Thriller', 'Psychological'],
                'link' => "https://drive.google.com/file/d/1YtwHrDIsKNud4cb4VVwtcfD_lZhdOnod/view?usp=drive_link"
            ],
            [
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'image' => "images/subtle_art.jpg",
                'description_id' => null,
                'description_en' => 'The Subtle Art of Not Giving a F*ck is a self-help book by Mark Manson that discusses how to live a more realistic and honest life with oneself. It emphasizes the importance of choosing what is truly worth caring about, and accepting limitations and failure as part of life. Using a straightforward and provocative style, the author encourages readers to focus on the value of a meaningful life rather than pursuing superficial happiness.',
                'publish_year' => '2016',
                'publisher' => 'Harper',
                'authors' => ['Mark Manson'],
                'categories' => ['Self-Help', 'Motivasi'],
                'link' => "https://drive.google.com/file/d/1ug6NIk_X87oul8KyY7hHPGyn-S7Fz7nS/view?usp=drive_link"
            ],
            [
                'title' => 'Filosofi Kopi',
                'image' => "images/filosofi_kopi.jpg",
                'description_id' => null,
                'description_en' => "Filosofi Kopi is a novel by Dee Lestari that tells the story of Ben and Jody's friendship as they pioneer a coffee shop with strong idealism. This story not only explores the world of coffee but also explores the meaning of life, the search for identity, and the philosophical values ​​behind each flavor. Through reflective dialogue and a simple plot, this novel invites readers to understand that every choice in life has meaning and consequences.",
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Filosofi', 'Drama'],
                'link' => "https://drive.google.com/file/d/1crX31Q5T2JRFI8k_dPstsJly11M6bLO6/view?usp=drive_link"
            ],
            [
                'title' => 'A Brief History of Time',
                'image' => "images/brief_history_time.jpg",
                'description_id' => null,
                'description_en' => 'A Brief History of Time is a book by Stephen Hawking that discusses the fundamental concepts of modern physics, such as the origins of the universe, the theory of relativity, quantum mechanics, black holes, and time. Written in relatively simple language, it can be understood by general readers without a deep background in physics. Through this work, Hawking invites readers to understand how the universe works and the development of human scientific thought in answering major questions about space, time, and the existence of the universe.',
                'publish_year' => '1988',
                'publisher' => 'Bantam Dell Publishing Group',
                'authors' => ['Stephen Hawking'],
                'categories' => ['Science', 'Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1QibUm8CySZL5PEWQPh-JQ0duUrCUOI7c/view?usp=drive_link"
            ],
            [
                'title' => 'Sherlock Holmes: A Study in Scarlet',
                'image' => "images/study_in_scarlet.jpg",
                'description_id' => null,
                'description_en' => 'Sherlock Holmes: A Study in Scarlet is a detective novel by Sir Arthur Conan Doyle that first introduced the characters of Sherlock Holmes and Dr. John Watson. The story begins with the meeting of Holmes and Watson, then develops into a mysterious murder case in London full of puzzles. With sharp observation skills, strong logic, and deductive reasoning methods, Sherlock Holmes is able to uncover the hidden facts behind the crime. This novel not only presents the suspense of the investigation, but also emphasizes the importance of critical and scientific thinking in solving problems, thus laying the foundation for the famous Sherlock Holmes series to this day.',
                'publish_year' => '1887',
                'publisher' => 'Ward Lock & Co.',
                'authors' => ['Arthur Conan Doyle'],
                'categories' => ['Mystery', 'Classic'],
                'link' => "https://drive.google.com/file/d/1SOSC--YKw5oQ4McFg0QgGSNfNwj8JQ5m/view?usp=drive_link"
            ],
            [
                'title' => 'IPA & IPS',
                'image' => "images/ipa_ips.jpg",
                'description_id' => null,
                'description_en' => "High school is the most beautiful time—people say. Because it's during this time that we enjoy everything about life as we grow into adulthood, from socializing to experiencing new experiences, to romance. Of course, in every high school with its diverse majors, there are often arguments or disagreements between majors. Generally, it's the science and social studies majors, which have completely opposite personalities. Basically, the personalities of science and social studies students differ drastically. Just because of their differences, they never get along. Whether with upperclassmen or in the same year, they're the same, like cats and dogs.'Do you want to be my girlfriend?' asked Rifqi, a social studies student, to a science major girl, causing a stir at school. How could that be?The situation with Michele and Rifqi was different. Michele, a science student, fell in love with Rifqi, a social studies student. Their story began with a law that brought them together. Amidst the frequent arguments between science and social studies students, Rifqi and Michele developed a love relationship that seemed unaffected by these differences.However, it's understandable that no love is easily attained. Their love story is tested by the presence of a third person. So, how will Michele and Rifqi overcome this? Can they finally unite despite their differences?",
                'publish_year' => ' 2005',
                'publisher' => 'Coconut Books',
                'authors' => ['Chachaii'],
                'categories' => ['Novel, Romance', 'Drama'],
                'link' => "dsadasdsadada"
            ],
            
            [
                'title' => 'The Psychology of Money',
                'image' => "images/psychology_of_money.jpg",
                'description_id' => null,
                'description_en' => "Doing well with money isn't necessarily about what you know. It's about how you behave. And behavior is hard to teach, even to really smart people. Money―investing, personal finance, and business decisions―is typically taught as a math-based field, where data and formulas tell us exactly what to do. But in the real world people don’t make financial decisions on a spreadsheet. They make them at the dinner table, or in a meeting room, where personal history, your own unique view of the world, ego, pride, marketing, and odd incentives are scrambled together.",
                'publish_year' => '2020',
                'publisher' => 'Harriman House',
                'authors' => ['Morgan Housel'],
                'categories' => ['Economy', 'Non-Fiction','Self-Help'],
                'link' => "https://drive.google.com/file/d/1AnUmhI8fA_ZMtBMCMYqbL1plWgtCoa8q/view?usp=drive_link",

            ],
            [
                'title' => 'The Richest Man in Babylon',
                'image' => "images/man_in_babylon.jpg",
                'description_id' => null,
                'description_en' => "The Richest Man in Babylon is considered as the greatest of all inspirational works on the subject of thrift, financial planning, and personal wealth. Revealed inside are the secrets to acquiring money, keeping money, and making money earn more money.Providing financial wisdom through parables, 'The Richest Man in Babylon' was originally a set of pamphlets, written by the author and distributed by banks and insurance companies. These pamphlets were later bundled together, giving birth to a book. In this new rendering by Charles Conrad, the classic tale is retold in clear, simple language for today's readers. These fascinating and informative stories set you on a sure path to prosperity and its accompanying joys.",
                'publish_year' => '1926',
                'publisher' => 'Chum Change',
                'authors' => ['George S. Clason'],
                'categories' => ['Non-Fiction','Classic','Self-Help'],
                'link' => "https://drive.google.com/file/d/1O6slGbKW8pVuYeeSomqSgWLIuvRyBcea/view?usp=drive_link",
            ],
            [
                'title' => 'The Murder of Roger Ackroyd',
                'image' => "images/The_murder_of.jpg",
                'description_id' => null,
                'description_en' => 'Roger Ackroyd knew too much. He knew that the woman he loved had poisoned her brutal first husband. He suspected also that someone had been blackmailing her. Then he is stabbed to death.',
                'publish_year' => '2000',
                'publisher' => 'Berkley',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1WhE-wlvJyw09c3HeyZRSYy7sIidv5KcG/view?usp=drive_link"
            ],
            [
                'title' => 'Murder on the Orient Express',
                'image' => "images/Murder_on_the_orient.jpg",
                'description_id' => null,
                'description_en' => "Agatha Christie's most famous murder mystery, reissued with a striking new cover with special finishes. Just after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Isolated and with a killer in their midst, detective Hercule Poirot must identify the murderer - in case he or she decides to strike again.",
                'publish_year' => '2010',
                'publisher' => 'HarperCollins',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/166lfQLMp1mnhpKnIxU0DY5zWSGofWtWX/view?usp=drive_link"
            ],
            [
                'title' => 'Death on the Nile',
                'image' => "images/Death_on_the_nile.jpg",
                'description_id' => null,
                'description_en' => "Poirot takes a vacation on a cruise on the Nile, but has an uneasy feeling that something is dangerously amiss.",
                'publish_year' => '1992',
                'publisher' => 'HarperCollins',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1TSFiEIFuSVAF6AeRwZWSmtLQdabT4qpm/view?usp=drive_link"
            ],
            [
                'title' => 'And Then There Were None',
                'image' => "images/And_Then_there_none.jpg",
                'description_id' => null,
                'description_en' => "One by one, a curious assortment guests on a private island off the coast of Devon begin to die and only the dead are above suspicion.",
                'publish_year' => '2004',
                'publisher' => 'Turtleback Books',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller','Classic'],
                'link' => "https://drive.google.com/file/d/1Efcpw6r8fZc29I93XVydm45x9Z2ek2ID/view?usp=drive_link"
            ],
            [
                'title' => 'A Very Merry Christmas',
                'image' => "images/A_very_Merry_christmas.jpg",
                'description_id' => null,
                'description_en' => "'Tis the season to be jolly -- and holey cheese was I trying! But on my way to New York City to meet my family for the holidays, my luggage got switched with another mouse's... Oh, rats! Now I had to scurry all over the Big Apple trying to track down that mouse... and all my Christmas presents! And I, Geronimo Stilton, am not a big cheese when it comes to getting around the Big Apple!",
                'publish_year' => '2008',
                'publisher' => 'Scholastic',
                'authors' => ['Geronimo Stiltone'],
                'categories' => ['Children','Children','Fiction'],
                'link' => "https://drive.google.com/file/d/1vgF9EeQddQGTRyOgNEEctnP920q7N35m/view?usp=drive_link"
            ],
            [
                'title' => 'Moby Dick',
                'image' => "images/Moby_Dick.jpg",
                'description_id' => null,
                'description_en' => "Herman Melville's Moby-Dick tells the tale of a whaling ship and its crew, who are carried progressively further out to sea by the fiery Captain Ahab. Obsessed with killing the massive whale, which had previously bitten off Ahab's leg, the seasoned seafarer steers his ship to confront the creature, while the rest of the shipmates, including the young narrator, Ishmael, and the harpoon expert, Queequeg, must contend with their increasingly dire journey.",
                'publish_year' => '2010',
                'publisher' => 'Hadrianum Classics',
                'authors' => ['Herman Melville'],
                'categories' => ['Classic','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1ERtJJWZsCtD7hcbeqRmOSHRH14z0L0eD/view?usp=drive_link"
            ],
            [
                'title' => 'The Art Of War',
                'image' => "images/The_Art_of_War.jpg",
                'description_id' => null,
                'description_en' => "Widely regarded as 'The Oldest Military Treatise in the World,' this landmark work covers principles of strategy, tactics, maneuvering, communication, and supplies; the use of terrain, fire, and the seasons of the year; the classification and utilization of spies; the treatment of soldiers, including captives, all have a modern ring to them.",
                'publish_year' => '1994',
                'publisher' => 'Hachette',
                'authors' => ['Sun Tzu'],
                'categories' => ['Classic','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1Sqal_6Jux3GZWqj2RoXHXH19fNbaoxM2/view?usp=drive_link"
            ],
            [
                'title' => 'Start with Why',
                'image' => "images/Start_With_Why_15th.jpg",
                'description_id' => null,
                'description_en' => "Sinek opens by asking some fundamental questions: Why are some people and organizations more innovative, more influential, and more profitable than others? Why do some command greater loyalty from customers and employees alike? Even among the successful, why are so few able to repeat their success over and over? Start With Why shows that the leaders who've had the greatest influence in the world--think Martin Luther King Jr., Steve Jobs, and the Wright Brothers--all think, act, and communicate the same way -- and it's the opposite of what everyone else does. Sinek calls this powerful idea 'The Golden Circle,' and it provides a framework upon which organizations can be built, movements can be led, and people can be inspired. And it all starts with WHY.",
                'publish_year' => '2009',
                'publisher' => 'Penguin',
                'authors' => ['Simon Sinek'],
                'categories' => ['Self-Help','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1AH_CEkL-Q4RFF-_otYxGtLdtW3MgTdxi/view?usp=drive_link"
            ],
            [
                'title' => 'Five On A Treasure Island',
                'image' => "images/The_Famous_Five.jpg",
                'description_id' => null,
                'description_en' => "This is the story how the 'Famous Five' came into being, and of their very first adventure together. And what an adventure it was. Involving an island, a ruined castle, an ancient wreck, and a desperate treasure hunt The children's pluck and resourcefulness saved the family fortunes and made possible many more exciting expeditions for the Five.",
                'publish_year' => '2008',
                'publisher' => 'Hachette',
                'authors' => ['Enid Blyton'],
                'categories' => ['Children','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1qBXkfX8cnNWYPewNeG5RORykoDln2sim/view?usp=drive_link"
            ],
            [
                'title' => "Five Go To Smuggler's Top",
                'image' => "images/The_Famous_Five_2.jpg",
                'description_id' => null,
                'description_en' => "If Uncle Quentin had had the top-heavy ash tree lopped, the gale would not have brought it crashing down on to Kirrin Cottage, and then the Five would not have gone to Smuggler's Top to stay with Sooty Lenoir and his eccentric father. But once there, queer and highly suspicious things seemed to happen, one after the other. Timmy, too, had his fair share of excitement, in and out of underground passages, and on the surrounding sea-marshes. This is the Five;s fourth adventure..",
                'publish_year' => '2010',
                'publisher' => 'Hachette',
                'authors' => ['Enid Blyton'],
                'categories' => ['Children','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1bSoFATTpCI8on3iFZTb6tJ2z0qckA1b3/view?usp=drive_link"
            ],
            [
                'title' => "Angels & Demons",
                'image' => "images/Angel_and_demon.jpg",
                'description_id' => null,
                'description_en' => "When world-renowned Harvard symbologist Robert Langdon is summoned to his first assignment to a Swiss research facility to analyze a mysterious symbol—seared into the chest of a murdered physicist—he discovers evidence of the unimaginable: the resurgence of an ancient secret brotherhood known as the Illuminati...the most powerful underground organization ever to walk the earth. The Illuminati has now surfaced to carry out the final phase of its legendary vendetta against its most hated enemy—the Catholic Church. Langdon's worst fears are confirmed on the eve of the Vatican's holy conclave, when a messenger of the Illuminati announces they have hidden an unstoppable time bomb at the very heart of Vatican City. With the countdown under way, Langdon jets to Rome to join forces with Vittoria Vetra, a beautiful and mysterious Italian scientist, to assist the Vatican in a desperate bid for survival.",
                'publish_year' => '2005',
                'publisher' => 'Atria',
                'authors' => ['Dan Brown'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1TPq0Ma72UNrQNZwuDtth4LoOtDY8TmQG/view?usp=drive_link"
            ],
            [
                'title' => "Diary of a Wimpy Kid",
                'image' => "images/Diary_of_a_Wimpy_kid.jpg",
                'description_id' => null,
                'description_en' => "Greg Heffley finds himself in a new year and school where undersize weaklings share the corridors with kids who are taller and meaner. Desperate to prove his maturity, Greg is happy to have his sidekick, Rowley, along for the ride. But when Rowley's star starts to rise, Greg tries to use his best friend's popularity to his own advantage.",
                'publish_year' => '2009',
                'publisher' => 'Amulet Books',
                'authors' => ['Jeff Kiney'],
                'categories' => ['Children','Fiction'],
                'link' => "https://drive.google.com/file/d/1Uei0E-3xTe9R5TtWfvzL2ABjF91P12GJ/view?usp=drive_link"
            ],
            [
                'title' => "Atomic Habits",
                'image' => "images/Atomic_habit.jpg",
                'description_id' => null,
                'description_en' => "If you're having trouble changing your habits, the problem isn't you. The problem is your system. Bad habits repeat themselves again and again not because you don't want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you'll get a proven system that can take you to new heights. Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.",
                'publish_year' => '2018',
                'publisher' => 'Penguin',
                'authors' => ['James Clear'],
                'categories' => ['Self-Help','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1uVTk82zGtctf01gDJMWXwaELcbtRegPO/view?usp=drive_link"
            ],
            
            
        ];

        foreach ($books as $b) {

            // Create book
            $book = Book::create([
                'title' => $b['title'],
                'image' => $b['image'],
                'description_id' => $b['description_id'],
                'description_en' => $b['description_en'],
                'publisher' => $b['publisher'],
                'publish_year' => $b['publish_year'],
                'link' => $b['link'],
                'status' => 'available',
            ]);

            // Attach authors by name
            $authorIds = Author::whereIn('name', $b['authors'])->pluck('id');
            $book->authors()->attach($authorIds);

            // Attach categories by name
            $categoryIds = Category::whereIn('name', $b['categories'])->pluck('id');
            $book->categories()->attach($categoryIds);
        }

        
        
    }
}
