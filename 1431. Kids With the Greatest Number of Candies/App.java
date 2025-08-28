import java.util.ArrayList;
import java.util.List;

public class App {
    public static void main(String[] args) throws Exception {
        int[] vet = { 2, 3, 5, 1, 3 };
        int extraCandies = 3;

        List<Boolean> list = kidsWithCandies(vet, extraCandies);
        list.forEach(t -> {
            System.out.print(t + " ");
        });
    }

    public static List<Boolean> kidsWithCandies(int[] candies, int extraCandies) {
        int bigger = candies[0];
        List<Boolean> boolList = new ArrayList<>(candies.length);
        for (int i = 1; i < candies.length; i++) {
            if (bigger < candies[i]) {
                bigger = candies[i];
            }
        }
        for (int i = 0; i < candies.length; i++) {
            boolList.add((candies[i] + extraCandies >= bigger));
        }
        return boolList;
    }
}
