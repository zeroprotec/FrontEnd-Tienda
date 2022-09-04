package Mintic;
import javax.persistence
import javax.annotation.processing.Generated;

import java.lang.annotation.Inherited;
import java.util.Date;

@Getter
@Setter
@Entity
@table(name=teacher)
public class teacher {
    // Atributos
    @Id
    @GeneratedValue(strategy );
    private int code;
    private String name;
    private String phone;
    private String email;
}
