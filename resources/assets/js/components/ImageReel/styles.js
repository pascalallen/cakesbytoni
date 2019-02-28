import styled from 'styled-components';
import { Row , Image} from 'react-bootstrap';

export const CenterRow = styled(Row)`
  display: flex;
  justify-content: center;
  align-items: center;
`;

export const StyledImage = styled.div`
  position: relative;
  float: left;
  width:  25%;
  height: 280px;
  background-position: 50% 50%;
  background-repeat:   no-repeat;
  background-size:     cover;
  background-image: url(${props => props.src};);
  filter: grayscale(100%);

  &:hover {
    filter: none;
  }
`;