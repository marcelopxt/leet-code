public class App {
    public static void main(String[] args) throws Exception {
        System.out.println(mergeAlternately("abc", "pqr"));
    }

    public static String mergeAlternately(String word1, String word2) {
        int size1 = word1.length();
        int size2 = word2.length();
        StringBuilder sb = new StringBuilder(size1 + size2);
        int bigger = (size1 > size2) ? size1 : size2;
        for (int i = 0; i < bigger; i++) {
            if (size1 > i)
                sb.append(word1.charAt(i));
            if (size2 > i)
                sb.append(word2.charAt(i));
        }
        return sb.toString();
    }
}
